<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SegmentId
 * @property Shapes\WriteSegmentRequest $WriteSegmentRequest
 */
class UpdateSegmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SegmentId: string,
     *     WriteSegmentRequest: Shapes\WriteSegmentRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
