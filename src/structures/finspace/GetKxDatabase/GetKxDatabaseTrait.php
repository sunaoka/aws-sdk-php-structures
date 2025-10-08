<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDatabase;

trait GetKxDatabaseTrait
{
    /**
     * @param GetKxDatabaseRequest $args
     * @return GetKxDatabaseResponse
     */
    public function getKxDatabase(GetKxDatabaseRequest $args)
    {
        $result = parent::getKxDatabase($args->toArray());
        return new GetKxDatabaseResponse($result->toArray());
    }
}
