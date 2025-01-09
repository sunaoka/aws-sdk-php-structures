<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeConnectionRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
