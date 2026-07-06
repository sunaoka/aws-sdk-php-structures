<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetMigration;

trait GetMigrationTrait
{
    /**
     * @param GetMigrationRequest $args
     * @return GetMigrationResponse
     */
    public function getMigration(GetMigrationRequest $args)
    {
        $result = parent::getMigration($args->toArray());
        return new GetMigrationResponse($result->toArray());
    }
}
