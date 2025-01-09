<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botName
 * @property string $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int $idleSessionTTLInSeconds
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Bot'|'BotNetwork' $botType
 * @property list<Shapes\BotMember> $botMembers
 * @property list<string> $failureReasons
 */
class DescribeBotResponse extends Response
{
}
