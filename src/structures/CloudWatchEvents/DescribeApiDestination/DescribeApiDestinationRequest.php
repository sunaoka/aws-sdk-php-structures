<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeApiDestinationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
