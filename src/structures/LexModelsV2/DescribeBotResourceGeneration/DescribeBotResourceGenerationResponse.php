<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotResourceGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $generationId
 * @property list<string>|null $failureReasons
 * @property 'Failed'|'Complete'|'InProgress'|null $generationStatus
 * @property string|null $generationInputPrompt
 * @property string|null $generatedBotLocaleUrl
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property string|null $modelArn
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeBotResourceGenerationResponse extends Response
{
}
