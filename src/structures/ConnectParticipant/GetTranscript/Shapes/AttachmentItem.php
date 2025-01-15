<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContentType
 * @property string|null $AttachmentId
 * @property string|null $AttachmentName
 * @property 'APPROVED'|'REJECTED'|'IN_PROGRESS'|null $Status
 */
class AttachmentItem extends Shape
{
    /**
     * @param array{
     *     ContentType?: string|null,
     *     AttachmentId?: string|null,
     *     AttachmentName?: string|null,
     *     Status?: 'APPROVED'|'REJECTED'|'IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
