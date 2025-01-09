<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 */
class DescribeTrackerRequest extends Request
{
    /**
     * @param array{TrackerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
