<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 */
class DeleteLogGroupRequest extends Request
{
    /**
     * @param array{logGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
