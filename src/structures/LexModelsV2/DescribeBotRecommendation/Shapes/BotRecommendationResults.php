<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botLocaleExportUrl
 * @property string|null $associatedTranscriptsUrl
 * @property BotRecommendationResultStatistics|null $statistics
 */
class BotRecommendationResults extends Shape
{
    /**
     * @param array{
     *     botLocaleExportUrl?: string|null,
     *     associatedTranscriptsUrl?: string|null,
     *     statistics?: BotRecommendationResultStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
