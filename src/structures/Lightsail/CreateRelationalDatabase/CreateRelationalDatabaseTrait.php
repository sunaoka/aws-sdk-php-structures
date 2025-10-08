<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabase;

trait CreateRelationalDatabaseTrait
{
    /**
     * @param CreateRelationalDatabaseRequest $args
     * @return CreateRelationalDatabaseResponse
     */
    public function createRelationalDatabase(CreateRelationalDatabaseRequest $args)
    {
        $result = parent::createRelationalDatabase($args->toArray());
        return new CreateRelationalDatabaseResponse($result->toArray());
    }
}
