<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ec2InstanceTypes' $name
 * @property list<string> $includeList
 * @property list<string> $effectiveIncludeList
 * @property list<string> $excludeList
 */
class EffectivePreferredResource extends Shape
{
    /**
     * @param array{
     *     name?: 'Ec2InstanceTypes',
     *     includeList?: list<string>,
     *     effectiveIncludeList?: list<string>,
     *     excludeList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
