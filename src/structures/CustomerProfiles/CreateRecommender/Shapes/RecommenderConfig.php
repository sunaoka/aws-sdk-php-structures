<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventsConfig|null $EventsConfig
 * @property int<0, 30>|null $TrainingFrequency
 * @property InferenceConfig|null $InferenceConfig
 * @property array<string, list<string>>|null $IncludedColumns
 * @property array<string, list<string>>|null $ExcludedColumns
 * @property DiversityConfig|null $DiversityConfig
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     EventsConfig?: EventsConfig|null,
     *     TrainingFrequency?: int<0, 30>|null,
     *     InferenceConfig?: InferenceConfig|null,
     *     IncludedColumns?: array<string, list<string>>|null,
     *     ExcludedColumns?: array<string, list<string>>|null,
     *     DiversityConfig?: DiversityConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
