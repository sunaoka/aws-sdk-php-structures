<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot;

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
 * @property array<string, string>|null $botTags
 * @property array<string, string>|null $testBotAliasTags
 * @property 'Bot'|'BotNetwork'|null $botType
 * @property list<Shapes\BotMember>|null $botMembers
 */
class CreateBotResponse extends Response
{
}
