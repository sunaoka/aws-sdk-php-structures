<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property string $botAlias
 * @property string $botName
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property 'Facebook'|'Slack'|'Twilio-Sms'|'Kik' $type
 * @property array<string, string> $botConfiguration
 * @property 'IN_PROGRESS'|'CREATED'|'FAILED' $status
 * @property string $failureReason
 */
class GetBotChannelAssociationResponse extends Response
{
}
