<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutRegistrationFieldValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property int<1, 100000> $VersionNumber
 * @property string $FieldPath
 * @property list<string>|null $SelectChoices
 * @property string|null $TextValue
 * @property string|null $RegistrationAttachmentId
 */
class PutRegistrationFieldValueResponse extends Response
{
}
