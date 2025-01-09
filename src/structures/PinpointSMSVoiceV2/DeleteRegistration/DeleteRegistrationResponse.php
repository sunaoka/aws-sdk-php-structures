<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property 'CREATED'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'PROVISIONING'|'COMPLETE'|'REQUIRES_UPDATES'|'CLOSED'|'DELETED' $RegistrationStatus
 * @property int<1, 100000> $CurrentVersionNumber
 * @property int<1, 100000> $ApprovedVersionNumber
 * @property int<1, 100000> $LatestDeniedVersionNumber
 * @property array<string, string> $AdditionalAttributes
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class DeleteRegistrationResponse extends Response
{
}
