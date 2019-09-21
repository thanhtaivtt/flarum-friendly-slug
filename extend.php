<?php
namespace Thanhtaivtt\FriendlySlug;

use Flarum\Discussion\Event\Saving;
use Illuminate\Events\Dispatcher;
use Thanhtaivtt\FriendlySlug\Listeners\Slug;

return function (Dispatcher $events) {
    $events->listen(Saving::class, Slug::class);
};
