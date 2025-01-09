<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
