<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableMultipleJobs
 * @property list<PlacementSpecification>|null $PlacementSpecifications
 */
class InstancePlacementConfig extends Shape
{
    /**
     * @param array{
     *     EnableMultipleJobs?: bool|null,
     *     PlacementSpecifications?: list<PlacementSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
