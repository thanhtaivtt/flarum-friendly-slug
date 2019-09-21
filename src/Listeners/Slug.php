<?php
/**
 * @author thanhtaivtt <thanhtaiv>
 */
namespace Thanhtaivtt\FriendlySlug\Listeners;

use Flarum\Discussion\Event\Saving;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Slug
{
    /**
     * Use Laravel slug.
     *
     * @param Saving $event
     */
    public function handle(Saving $event)
    {
        if (Arr::has($event->data, 'attributes.title')) {
            $event->discussion->slug = Str::slug($event->discussion->title);
        }
    }
}
