<?php

namespace JavierSolis\LaravelPublishTestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JavierSolis\LaravelPublishTestPackage\Skeleton\SkeletonClass
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
