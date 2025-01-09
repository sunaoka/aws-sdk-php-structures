<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 */
class StopBotRecommendationRequest extends Request
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
