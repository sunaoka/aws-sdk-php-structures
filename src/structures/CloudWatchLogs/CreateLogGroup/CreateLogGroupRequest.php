<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 */
class CreateLogGroupRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
