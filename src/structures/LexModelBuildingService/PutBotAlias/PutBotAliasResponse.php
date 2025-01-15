<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias;

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
 * @property list<Shapes\Tag>|null $tags
 */
class PutBotAliasResponse extends Response
{
}
