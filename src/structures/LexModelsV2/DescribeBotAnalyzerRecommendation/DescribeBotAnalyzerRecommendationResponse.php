<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAnalyzerRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Processing'|'Available'|'Failed'|'Stopping'|'Stopped'|null $botAnalyzerStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property list<Shapes\BotAnalyzerRecommendation>|null $botAnalyzerRecommendationList
 * @property string|null $nextToken
 */
class DescribeBotAnalyzerRecommendationResponse extends Response
{
}
