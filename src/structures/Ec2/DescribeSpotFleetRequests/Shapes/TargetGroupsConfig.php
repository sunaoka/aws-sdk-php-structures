<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroup> $TargetGroups
 */
class TargetGroupsConfig extends Shape
{
    /**
     * @param array{TargetGroups?: list<TargetGroup>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
