<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $itemExplorationConfig
 * @property int $minRecommendationRequestsPerSecond
 * @property TrainingDataConfig $trainingDataConfig
 * @property bool $enableMetadataWithRecommendations
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>,
     *     minRecommendationRequestsPerSecond?: int,
     *     trainingDataConfig?: TrainingDataConfig,
     *     enableMetadataWithRecommendations?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
