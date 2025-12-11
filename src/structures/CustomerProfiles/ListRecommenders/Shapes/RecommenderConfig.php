<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventsConfig $EventsConfig
 * @property int<7, 7>|null $TrainingFrequency
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     EventsConfig: EventsConfig,
     *     TrainingFrequency?: int<7, 7>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
