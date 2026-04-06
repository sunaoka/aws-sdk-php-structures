<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification> $InstanceGroups
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups: list<Shapes\ClusterInstanceGroupSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
