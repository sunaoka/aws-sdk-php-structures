<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property 'STANDARD'|'INFREQUENT_ACCESS' $logGroupClass
 */
class CreateLogGroupRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     kmsKeyId?: string,
     *     tags?: array<string, string>,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
