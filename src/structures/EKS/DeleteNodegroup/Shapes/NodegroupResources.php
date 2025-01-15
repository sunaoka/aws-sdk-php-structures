<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutoScalingGroup>|null $autoScalingGroups
 * @property string|null $remoteAccessSecurityGroup
 */
class NodegroupResources extends Shape
{
    /**
     * @param array{
     *     autoScalingGroups?: list<AutoScalingGroup>|null,
     *     remoteAccessSecurityGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
