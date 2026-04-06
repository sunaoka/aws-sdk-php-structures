<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $policyName
 * @property string|null $resourceArn
 * @property string|null $expectedRevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     resourceArn?: string|null,
     *     expectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
