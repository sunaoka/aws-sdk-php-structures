<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEventsDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeEventsDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
