<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $botVersion
 * @property string|null $botName
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $checksum
 * @property Shapes\ConversationLogsResponse|null $conversationLogs
 */
class GetBotAliasResponse extends Response
{
}
