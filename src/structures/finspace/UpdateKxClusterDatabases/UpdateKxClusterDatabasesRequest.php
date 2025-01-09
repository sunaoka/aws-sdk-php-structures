<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string $clientToken
 * @property list<Shapes\KxDatabaseConfiguration> $databases
 * @property Shapes\KxDeploymentConfiguration $deploymentConfiguration
 */
class UpdateKxClusterDatabasesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     clientToken?: string,
     *     databases: list<Shapes\KxDatabaseConfiguration>,
     *     deploymentConfiguration?: Shapes\KxDeploymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
