<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateRelationalDatabase;

trait UpdateRelationalDatabaseTrait
{
    /**
     * @param UpdateRelationalDatabaseRequest $args
     * @return UpdateRelationalDatabaseResponse
     */
    public function updateRelationalDatabase(UpdateRelationalDatabaseRequest $args)
    {
        $result = parent::updateRelationalDatabase($args->toArray());
        return new UpdateRelationalDatabaseResponse($result->toArray());
    }
}
