<?php

namespace Sunaoka\Aws\Structures\Kms\PutKeyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $PolicyName
 * @property string $Policy
 * @property bool $BypassPolicyLockoutSafetyCheck
 */
class PutKeyPolicyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PolicyName?: string,
     *     Policy: string,
     *     BypassPolicyLockoutSafetyCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
