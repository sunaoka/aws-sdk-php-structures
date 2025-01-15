<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachmentName
 * @property string|null $ContentType
 * @property string $AttachmentId
 * @property 'APPROVED'|'REJECTED'|'IN_PROGRESS'|null $Status
 */
class RealTimeContactAnalysisAttachment extends Shape
{
    /**
     * @param array{
     *     AttachmentName: string,
     *     ContentType?: string|null,
     *     AttachmentId: string,
     *     Status?: 'APPROVED'|'REJECTED'|'IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
