<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $botAlias
 * @property string|null $botName
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property 'Facebook'|'Slack'|'Twilio-Sms'|'Kik'|null $type
 * @property array<string, string>|null $botConfiguration
 * @property 'IN_PROGRESS'|'CREATED'|'FAILED'|null $status
 * @property string|null $failureReason
 */
class GetBotChannelAssociationResponse extends Response
{
}
