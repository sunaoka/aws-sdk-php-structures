<?php

namespace Sunaoka\Aws\Structures\Lightsail\RebootRelationalDatabase;

trait RebootRelationalDatabaseTrait
{
    /**
     * @param RebootRelationalDatabaseRequest $args
     * @return RebootRelationalDatabaseResponse
     */
    public function rebootRelationalDatabase(RebootRelationalDatabaseRequest $args)
    {
        $result = parent::rebootRelationalDatabase($args->toArray());
        return new RebootRelationalDatabaseResponse($result->toArray());
    }
}
