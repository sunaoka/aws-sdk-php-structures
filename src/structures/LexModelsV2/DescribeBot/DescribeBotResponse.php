<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botName
 * @property string|null $description
 * @property string|null $roleArn
 * @property Shapes\DataPrivacy|null $dataPrivacy
 * @property int<60, 86400>|null $idleSessionTTLInSeconds
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Bot'|'BotNetwork'|null $botType
 * @property list<Shapes\BotMember>|null $botMembers
 * @property list<string>|null $failureReasons
 */
class DescribeBotResponse extends Response
{
}
