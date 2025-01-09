<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{policyName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
