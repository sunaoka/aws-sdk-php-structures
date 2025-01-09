<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botName
 * @property string $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property array<string, string> $botTags
 * @property array<string, string> $testBotAliasTags
 * @property 'Bot'|'BotNetwork' $botType
 * @property list<Shapes\BotMember> $botMembers
 */
class CreateBotResponse extends Response
{
}
