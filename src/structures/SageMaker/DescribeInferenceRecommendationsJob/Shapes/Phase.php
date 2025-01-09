<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InitialNumberOfUsers
 * @property int $SpawnRate
 * @property int $DurationInSeconds
 */
class Phase extends Shape
{
    /**
     * @param array{
     *     InitialNumberOfUsers?: int,
     *     SpawnRate?: int,
     *     DurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
