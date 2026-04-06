<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property int<1, 100000> $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'REVIEWING'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property Shapes\RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 */
class SubmitRegistrationVersionResponse extends Response
{
}
