<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property 'DATA_PROTECTION_POLICY' $policyType
 */
class DeleteAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyType: 'DATA_PROTECTION_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
