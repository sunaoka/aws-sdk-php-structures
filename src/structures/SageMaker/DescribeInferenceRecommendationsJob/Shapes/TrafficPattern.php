<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PHASES'|'STAIRS'|null $TrafficType
 * @property list<Phase>|null $Phases
 * @property Stairs|null $Stairs
 */
class TrafficPattern extends Shape
{
    /**
     * @param array{
     *     TrafficType?: 'PHASES'|'STAIRS'|null,
     *     Phases?: list<Phase>|null,
     *     Stairs?: Stairs|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
