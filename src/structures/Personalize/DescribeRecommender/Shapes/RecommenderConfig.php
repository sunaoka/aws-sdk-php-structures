<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $itemExplorationConfig
 * @property int<1, max>|null $minRecommendationRequestsPerSecond
 * @property TrainingDataConfig|null $trainingDataConfig
 * @property bool|null $enableMetadataWithRecommendations
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>|null,
     *     minRecommendationRequestsPerSecond?: int<1, max>|null,
     *     trainingDataConfig?: TrainingDataConfig|null,
     *     enableMetadataWithRecommendations?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
