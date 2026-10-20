<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PrepareMigration;

trait PrepareMigrationTrait
{
    /**
     * @param PrepareMigrationRequest $args
     * @return PrepareMigrationResponse
     */
    public function prepareMigration(PrepareMigrationRequest $args)
    {
        $result = parent::prepareMigration($args->toArray());
        return new PrepareMigrationResponse($result->toArray());
    }
}
