<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeEventTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventTrackerArn
 */
class DescribeEventTrackerRequest extends Request
{
    /**
     * @param array{eventTrackerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
