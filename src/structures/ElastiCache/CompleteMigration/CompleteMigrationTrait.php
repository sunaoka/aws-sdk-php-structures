<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration;

trait CompleteMigrationTrait
{
    /**
     * @param CompleteMigrationRequest $args
     * @return CompleteMigrationResponse
     */
    public function completeMigration(CompleteMigrationRequest $args)
    {
        $result = parent::completeMigration($args->toArray());
        return new CompleteMigrationResponse($result->toArray());
    }
}
