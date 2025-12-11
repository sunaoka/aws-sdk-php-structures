<?php

namespace Sunaoka\Aws\Structures\DSQL\PutClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $policy
 * @property bool|null $bypassPolicyLockoutSafetyCheck
 * @property string|null $expectedPolicyVersion
 * @property string|null $clientToken
 */
class PutClusterPolicyRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     policy: string,
     *     bypassPolicyLockoutSafetyCheck?: bool|null,
     *     expectedPolicyVersion?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
