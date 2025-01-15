<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $InitialNumberOfUsers
 * @property int<0, max>|null $SpawnRate
 * @property int<1, max>|null $DurationInSeconds
 */
class Phase extends Shape
{
    /**
     * @param array{
     *     InitialNumberOfUsers?: int<1, max>|null,
     *     SpawnRate?: int<0, max>|null,
     *     DurationInSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
