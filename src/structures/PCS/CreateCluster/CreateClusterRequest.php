<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\SchedulerRequest $scheduler
 * @property 'SMALL'|'MEDIUM'|'LARGE' $size
 * @property Shapes\NetworkingRequest $networking
 * @property Shapes\ClusterSlurmConfigurationRequest $slurmConfiguration
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     scheduler: Shapes\SchedulerRequest,
     *     size: 'SMALL'|'MEDIUM'|'LARGE',
     *     networking: Shapes\NetworkingRequest,
     *     slurmConfiguration?: Shapes\ClusterSlurmConfigurationRequest,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
