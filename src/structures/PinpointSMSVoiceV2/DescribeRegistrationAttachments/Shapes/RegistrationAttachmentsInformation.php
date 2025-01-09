<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistrationAttachmentArn
 * @property string $RegistrationAttachmentId
 * @property 'UPLOAD_IN_PROGRESS'|'UPLOAD_COMPLETE'|'UPLOAD_FAILED'|'DELETED' $AttachmentStatus
 * @property 'INTERNAL_ERROR' $AttachmentUploadErrorReason
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class RegistrationAttachmentsInformation extends Shape
{
    /**
     * @param array{
     *     RegistrationAttachmentArn: string,
     *     RegistrationAttachmentId: string,
     *     AttachmentStatus: 'UPLOAD_IN_PROGRESS'|'UPLOAD_COMPLETE'|'UPLOAD_FAILED'|'DELETED',
     *     AttachmentUploadErrorReason?: 'INTERNAL_ERROR',
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
