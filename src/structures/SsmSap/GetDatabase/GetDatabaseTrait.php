<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase;

trait GetDatabaseTrait
{
    /**
     * @param GetDatabaseRequest $args
     * @return GetDatabaseResponse
     */
    public function getDatabase(GetDatabaseRequest $args)
    {
        $result = parent::getDatabase($args->toArray());
        return new GetDatabaseResponse($result->toArray());
    }
}
