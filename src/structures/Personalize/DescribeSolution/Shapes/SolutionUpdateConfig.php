<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoTrainingConfig|null $autoTrainingConfig
 * @property EventsConfig|null $eventsConfig
 */
class SolutionUpdateConfig extends Shape
{
    /**
     * @param array{
     *     autoTrainingConfig?: AutoTrainingConfig|null,
     *     eventsConfig?: EventsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
