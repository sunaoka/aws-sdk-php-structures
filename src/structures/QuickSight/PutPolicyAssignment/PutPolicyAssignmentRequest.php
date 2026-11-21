<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PolicyArn
 * @property string $PrincipalArn
 * @property string|null $ExistingPolicyArn
 * @property int<1, max>|null $Revision
 */
class PutPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyArn: string,
     *     PrincipalArn: string,
     *     ExistingPolicyArn?: string|null,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
