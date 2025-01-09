<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribePartnerEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribePartnerEventSourceRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
