<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationCodeGeneration;

trait StartNetworkMigrationCodeGenerationTrait
{
    /**
     * @param StartNetworkMigrationCodeGenerationRequest $args
     * @return StartNetworkMigrationCodeGenerationResponse
     */
    public function startNetworkMigrationCodeGeneration(StartNetworkMigrationCodeGenerationRequest $args)
    {
        $result = parent::startNetworkMigrationCodeGeneration($args->toArray());
        return new StartNetworkMigrationCodeGenerationResponse($result->toArray());
    }
}
