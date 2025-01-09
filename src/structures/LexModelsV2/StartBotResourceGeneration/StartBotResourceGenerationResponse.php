<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotResourceGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $generationInputPrompt
 * @property string $generationId
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Failed'|'Complete'|'InProgress' $generationStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 */
class StartBotResourceGenerationResponse extends Response
{
}
