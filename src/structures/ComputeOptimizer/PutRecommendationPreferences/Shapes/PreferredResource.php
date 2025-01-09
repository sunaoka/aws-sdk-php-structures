<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ec2InstanceTypes' $name
 * @property list<string> $includeList
 * @property list<string> $excludeList
 */
class PreferredResource extends Shape
{
    /**
     * @param array{
     *     name?: 'Ec2InstanceTypes',
     *     includeList?: list<string>,
     *     excludeList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
