<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botName
 * @property string $botVersion
 * @property string $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property list<string> $failureReasons
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property list<Shapes\ParentBotNetwork> $parentBotNetworks
 * @property 'Bot'|'BotNetwork' $botType
 * @property list<Shapes\BotMember> $botMembers
 */
class DescribeBotVersionResponse extends Response
{
}
