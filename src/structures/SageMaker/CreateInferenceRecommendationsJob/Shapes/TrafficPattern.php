<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PHASES'|'STAIRS' $TrafficType
 * @property list<Phase> $Phases
 * @property Stairs $Stairs
 */
class TrafficPattern extends Shape
{
    /**
     * @param array{
     *     TrafficType?: 'PHASES'|'STAIRS',
     *     Phases?: list<Phase>,
     *     Stairs?: Stairs
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
