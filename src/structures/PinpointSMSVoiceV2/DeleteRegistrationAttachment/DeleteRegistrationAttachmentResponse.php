<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistrationAttachment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationAttachmentArn
 * @property string $RegistrationAttachmentId
 * @property 'UPLOAD_IN_PROGRESS'|'UPLOAD_COMPLETE'|'UPLOAD_FAILED'|'DELETED' $AttachmentStatus
 * @property 'INTERNAL_ERROR'|null $AttachmentUploadErrorReason
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class DeleteRegistrationAttachmentResponse extends Response
{
}
