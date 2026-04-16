<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventsConfig|null $EventsConfig
 * @property int<1, 30>|null $TrainingFrequency
 * @property InferenceConfig|null $InferenceConfig
 * @property array<string, list<string>>|null $IncludedColumns
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     EventsConfig?: EventsConfig|null,
     *     TrainingFrequency?: int<1, 30>|null,
     *     InferenceConfig?: InferenceConfig|null,
     *     IncludedColumns?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
