<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $policyName
 * @property string|null $policyDocument
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
