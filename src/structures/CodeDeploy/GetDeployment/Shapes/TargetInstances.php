<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EC2TagFilter> $tagFilters
 * @property list<string> $autoScalingGroups
 * @property EC2TagSet $ec2TagSet
 */
class TargetInstances extends Shape
{
    /**
     * @param array{
     *     tagFilters?: list<EC2TagFilter>,
     *     autoScalingGroups?: list<string>,
     *     ec2TagSet?: EC2TagSet
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
