<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property int $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property Shapes\RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 */
class CreateRegistrationVersionResponse extends Response
{
}
