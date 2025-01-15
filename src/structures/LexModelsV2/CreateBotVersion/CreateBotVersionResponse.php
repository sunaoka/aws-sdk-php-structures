<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $description
 * @property string|null $botVersion
 * @property array<string, Shapes\BotVersionLocaleDetails>|null $botVersionLocaleSpecification
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 */
class CreateBotVersionResponse extends Response
{
}
