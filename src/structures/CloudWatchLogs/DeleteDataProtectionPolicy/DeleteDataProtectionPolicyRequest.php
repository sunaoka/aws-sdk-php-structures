<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDataProtectionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 */
class DeleteDataProtectionPolicyRequest extends Request
{
    /**
     * @param array{logGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
