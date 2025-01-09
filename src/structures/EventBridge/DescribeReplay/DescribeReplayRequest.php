<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeReplay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplayName
 */
class DescribeReplayRequest extends Request
{
    /**
     * @param array{ReplayName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
