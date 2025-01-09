<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property int $retentionInDays
 */
class PutRetentionPolicyRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     retentionInDays: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
