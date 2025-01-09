<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property string $botVersion
 * @property string $botName
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $checksum
 * @property Shapes\ConversationLogsResponse $conversationLogs
 * @property list<Shapes\Tag> $tags
 */
class PutBotAliasResponse extends Response
{
}
