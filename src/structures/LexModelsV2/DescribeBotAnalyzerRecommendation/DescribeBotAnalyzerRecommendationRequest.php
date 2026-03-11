<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAnalyzerRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAnalyzerRequestId
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeBotAnalyzerRecommendationRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAnalyzerRequestId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
