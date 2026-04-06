<?php

namespace Sunaoka\Aws\Structures\Kms\PutKeyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|null $PolicyName
 * @property string $Policy
 * @property bool|null $BypassPolicyLockoutSafetyCheck
 */
class PutKeyPolicyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PolicyName?: string|null,
     *     Policy: string,
     *     BypassPolicyLockoutSafetyCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
