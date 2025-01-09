<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UntagLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property list<string> $tags
 */
class UntagLogGroupRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     tags: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
