<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateDatabase;

trait UpdateDatabaseTrait
{
    /**
     * @param UpdateDatabaseRequest $args
     * @return UpdateDatabaseResponse
     */
    public function updateDatabase(UpdateDatabaseRequest $args)
    {
        $result = parent::updateDatabase($args->toArray());
        return new UpdateDatabaseResponse($result->toArray());
    }
}
