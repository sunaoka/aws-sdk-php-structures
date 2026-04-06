<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property 'DATA_PROTECTION_POLICY' $policyType
 * @property 'ALL'|null $scope
 */
class PutAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyDocument: string,
     *     policyType: 'DATA_PROTECTION_POLICY',
     *     scope?: 'ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
