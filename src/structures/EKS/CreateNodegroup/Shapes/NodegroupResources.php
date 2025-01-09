<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutoScalingGroup> $autoScalingGroups
 * @property string $remoteAccessSecurityGroup
 */
class NodegroupResources extends Shape
{
    /**
     * @param array{
     *     autoScalingGroups?: list<AutoScalingGroup>,
     *     remoteAccessSecurityGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
