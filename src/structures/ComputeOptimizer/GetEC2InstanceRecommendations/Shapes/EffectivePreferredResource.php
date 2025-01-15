<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ec2InstanceTypes'|null $name
 * @property list<string>|null $includeList
 * @property list<string>|null $effectiveIncludeList
 * @property list<string>|null $excludeList
 */
class EffectivePreferredResource extends Shape
{
    /**
     * @param array{
     *     name?: 'Ec2InstanceTypes'|null,
     *     includeList?: list<string>|null,
     *     effectiveIncludeList?: list<string>|null,
     *     excludeList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
