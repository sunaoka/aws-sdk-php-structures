<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EC2TagFilter>|null $tagFilters
 * @property list<string>|null $autoScalingGroups
 * @property EC2TagSet|null $ec2TagSet
 */
class TargetInstances extends Shape
{
    /**
     * @param array{
     *     tagFilters?: list<EC2TagFilter>|null,
     *     autoScalingGroups?: list<string>|null,
     *     ec2TagSet?: EC2TagSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
