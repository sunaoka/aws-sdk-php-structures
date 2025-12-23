<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property int<1, 100000> $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'AWS_REVIEWING'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property Shapes\RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 * @property bool $AwsReview
 */
class SubmitRegistrationVersionResponse extends Response
{
}
