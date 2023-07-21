<?php

namespace Wenhainan\LavarelCalendar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wenhainan\LavarelCalendar\Skeleton\SkeletonClass
 */
class LavarelCalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lavarel-calendar';
    }
}
