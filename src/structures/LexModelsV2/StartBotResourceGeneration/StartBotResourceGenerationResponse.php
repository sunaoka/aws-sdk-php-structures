<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotResourceGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $generationInputPrompt
 * @property string|null $generationId
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Failed'|'Complete'|'InProgress'|null $generationStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 */
class StartBotResourceGenerationResponse extends Response
{
}
