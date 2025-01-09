<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $segment
 */
class GetSegmentRequest extends Request
{
    /**
     * @param array{segment: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
