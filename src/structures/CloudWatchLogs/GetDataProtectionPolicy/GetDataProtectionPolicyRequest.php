<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDataProtectionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 */
class GetDataProtectionPolicyRequest extends Request
{
    /**
     * @param array{logGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
