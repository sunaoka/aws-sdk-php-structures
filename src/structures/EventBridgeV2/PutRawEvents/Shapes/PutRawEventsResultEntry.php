<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property string|null $SequenceNumber
 * @property 'PUBLISHED'|'DEDUPLICATED'|null $SuccessCode
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PutRawEventsResultEntry extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     SequenceNumber?: string|null,
     *     SuccessCode?: 'PUBLISHED'|'DEDUPLICATED'|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
