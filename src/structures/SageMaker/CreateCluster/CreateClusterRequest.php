<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification> $InstanceGroups
 * @property Shapes\VpcConfig $VpcConfig
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ClusterOrchestrator $Orchestrator
 * @property 'Automatic'|'None' $NodeRecovery
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups: list<Shapes\ClusterInstanceGroupSpecification>,
     *     VpcConfig?: Shapes\VpcConfig,
     *     Tags?: list<Shapes\Tag>,
     *     Orchestrator?: Shapes\ClusterOrchestrator,
     *     NodeRecovery?: 'Automatic'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
