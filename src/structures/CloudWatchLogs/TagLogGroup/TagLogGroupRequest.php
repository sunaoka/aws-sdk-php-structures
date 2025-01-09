<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TagLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property array<string, string> $tags
 */
class TagLogGroupRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
