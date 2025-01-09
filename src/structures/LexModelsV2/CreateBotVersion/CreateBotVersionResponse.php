<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $description
 * @property string $botVersion
 * @property array<string, Shapes\BotVersionLocaleDetails> $botVersionLocaleSpecification
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 */
class CreateBotVersionResponse extends Response
{
}
