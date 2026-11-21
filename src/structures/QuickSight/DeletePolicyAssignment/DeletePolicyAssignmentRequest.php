<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeletePolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PolicyArn
 * @property string $PrincipalArn
 * @property int<1, max>|null $Revision
 */
class DeletePolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyArn: string,
     *     PrincipalArn: string,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
