<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBundles;

trait GetRelationalDatabaseBundlesTrait
{
    /**
     * @param GetRelationalDatabaseBundlesRequest $args
     * @return GetRelationalDatabaseBundlesResponse
     */
    public function getRelationalDatabaseBundles(GetRelationalDatabaseBundlesRequest $args)
    {
        $result = parent::getRelationalDatabaseBundles($args->toArray());
        return new GetRelationalDatabaseBundlesResponse($result->toArray());
    }
}
