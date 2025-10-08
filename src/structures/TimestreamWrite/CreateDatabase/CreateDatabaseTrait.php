<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateDatabase;

trait CreateDatabaseTrait
{
    /**
     * @param CreateDatabaseRequest $args
     * @return CreateDatabaseResponse
     */
    public function createDatabase(CreateDatabaseRequest $args)
    {
        $result = parent::createDatabase($args->toArray());
        return new CreateDatabaseResponse($result->toArray());
    }
}
