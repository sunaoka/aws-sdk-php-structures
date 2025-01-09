<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $itemExplorationConfig
 * @property int<1, max> $minRecommendationRequestsPerSecond
 * @property TrainingDataConfig $trainingDataConfig
 * @property bool $enableMetadataWithRecommendations
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>,
     *     minRecommendationRequestsPerSecond?: int<1, max>,
     *     trainingDataConfig?: TrainingDataConfig,
     *     enableMetadataWithRecommendations?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
