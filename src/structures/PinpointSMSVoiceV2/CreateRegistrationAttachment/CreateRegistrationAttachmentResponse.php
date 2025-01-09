<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAttachment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationAttachmentArn
 * @property string $RegistrationAttachmentId
 * @property 'UPLOAD_IN_PROGRESS'|'UPLOAD_COMPLETE'|'UPLOAD_FAILED'|'DELETED' $AttachmentStatus
 * @property list<Shapes\Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class CreateRegistrationAttachmentResponse extends Response
{
}
