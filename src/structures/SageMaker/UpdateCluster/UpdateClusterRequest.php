<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification> $InstanceGroups
 * @property 'Automatic'|'None'|null $NodeRecovery
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups: list<Shapes\ClusterInstanceGroupSpecification>,
     *     NodeRecovery?: 'Automatic'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
