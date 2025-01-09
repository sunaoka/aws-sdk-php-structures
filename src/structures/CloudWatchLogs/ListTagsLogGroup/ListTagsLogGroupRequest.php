<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListTagsLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 */
class ListTagsLogGroupRequest extends Request
{
    /**
     * @param array{logGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
