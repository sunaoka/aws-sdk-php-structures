<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDatabase;

trait CreateKxDatabaseTrait
{
    /**
     * @param CreateKxDatabaseRequest $args
     * @return CreateKxDatabaseResponse
     */
    public function createKxDatabase(CreateKxDatabaseRequest $args)
    {
        $result = parent::createKxDatabase($args->toArray());
        return new CreateKxDatabaseResponse($result->toArray());
    }
}
