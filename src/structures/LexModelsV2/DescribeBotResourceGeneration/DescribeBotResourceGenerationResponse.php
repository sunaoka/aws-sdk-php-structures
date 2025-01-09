<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotResourceGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $generationId
 * @property list<string> $failureReasons
 * @property 'Failed'|'Complete'|'InProgress' $generationStatus
 * @property string $generationInputPrompt
 * @property string $generatedBotLocaleUrl
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property string $modelArn
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeBotResourceGenerationResponse extends Response
{
}
