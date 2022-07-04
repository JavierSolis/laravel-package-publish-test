<?php

namespace JavierLibs\LaravelPublishTestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JavierLibs\LaravelPublishTestPackage\Skeleton\SkeletonClass
 */
class LaravelPublishTestPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-publish-test-package';
    }
}
