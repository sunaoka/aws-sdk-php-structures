<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string|null $clientToken
 * @property Shapes\UpdateClusterSlurmConfigurationRequest|null $slurmConfiguration
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     clientToken?: string|null,
     *     slurmConfiguration?: Shapes\UpdateClusterSlurmConfigurationRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
