<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 */
class DeleteRetentionPolicyRequest extends Request
{
    /**
     * @param array{logGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
