<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ec2InstanceTypes'|null $name
 * @property list<string>|null $includeList
 * @property list<string>|null $excludeList
 */
class PreferredResource extends Shape
{
    /**
     * @param array{
     *     name?: 'Ec2InstanceTypes'|null,
     *     includeList?: list<string>|null,
     *     excludeList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
