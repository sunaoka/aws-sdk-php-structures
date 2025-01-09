<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDataProtectionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property string $policyDocument
 */
class PutDataProtectionPolicyRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     policyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
