<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventsConfig|null $EventsConfig
 * @property int<1, 30>|null $TrainingFrequency
 * @property InferenceConfig|null $InferenceConfig
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     EventsConfig?: EventsConfig|null,
     *     TrainingFrequency?: int<1, 30>|null,
     *     InferenceConfig?: InferenceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
