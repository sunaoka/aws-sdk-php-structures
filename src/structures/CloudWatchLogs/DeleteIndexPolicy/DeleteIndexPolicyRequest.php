<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteIndexPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 */
class DeleteIndexPolicyRequest extends Request
{
    /**
     * @param array{logGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
