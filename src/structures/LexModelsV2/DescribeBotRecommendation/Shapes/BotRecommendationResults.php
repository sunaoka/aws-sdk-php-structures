<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botLocaleExportUrl
 * @property string $associatedTranscriptsUrl
 * @property BotRecommendationResultStatistics $statistics
 */
class BotRecommendationResults extends Shape
{
    /**
     * @param array{
     *     botLocaleExportUrl?: string,
     *     associatedTranscriptsUrl?: string,
     *     statistics?: BotRecommendationResultStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
