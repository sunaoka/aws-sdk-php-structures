<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'LIMITS_PROFILE'|'CUSTOM_PERMISSIONS' $PolicyType
 * @property string $PrincipalArn
 */
class GetPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyType: 'LIMITS_PROFILE'|'CUSTOM_PERMISSIONS',
     *     PrincipalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
