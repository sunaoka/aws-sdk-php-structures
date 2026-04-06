<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $segment
 */
class DeleteSegmentRequest extends Request
{
    /**
     * @param array{segment: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
