<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationDeployment;

trait StartNetworkMigrationDeploymentTrait
{
    /**
     * @param StartNetworkMigrationDeploymentRequest $args
     * @return StartNetworkMigrationDeploymentResponse
     */
    public function startNetworkMigrationDeployment(StartNetworkMigrationDeploymentRequest $args)
    {
        $result = parent::startNetworkMigrationDeployment($args->toArray());
        return new StartNetworkMigrationDeploymentResponse($result->toArray());
    }
}
