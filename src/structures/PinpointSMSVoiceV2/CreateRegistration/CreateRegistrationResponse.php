<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property 'CREATED'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'PROVISIONING'|'COMPLETE'|'REQUIRES_UPDATES'|'CLOSED'|'DELETED' $RegistrationStatus
 * @property int $CurrentVersionNumber
 * @property array<string, string> $AdditionalAttributes
 * @property list<Shapes\Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class CreateRegistrationResponse extends Response
{
}
