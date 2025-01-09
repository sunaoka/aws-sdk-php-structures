<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 */
class DescribeBotRecommendationRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     botRecommendationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
