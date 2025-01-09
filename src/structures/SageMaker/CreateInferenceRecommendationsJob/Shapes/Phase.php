<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $InitialNumberOfUsers
 * @property int<0, max> $SpawnRate
 * @property int<1, max> $DurationInSeconds
 */
class Phase extends Shape
{
    /**
     * @param array{
     *     InitialNumberOfUsers?: int<1, max>,
     *     SpawnRate?: int<0, max>,
     *     DurationInSeconds?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
