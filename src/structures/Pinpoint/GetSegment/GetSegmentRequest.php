<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SegmentId
 */
class GetSegmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SegmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
