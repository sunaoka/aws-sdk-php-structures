<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateLogGroupRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
