<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string $AttachmentId
 * @property string $AttachmentName
 * @property 'APPROVED'|'REJECTED'|'IN_PROGRESS' $Status
 */
class AttachmentItem extends Shape
{
    /**
     * @param array{
     *     ContentType?: string,
     *     AttachmentId?: string,
     *     AttachmentName?: string,
     *     Status?: 'APPROVED'|'REJECTED'|'IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
