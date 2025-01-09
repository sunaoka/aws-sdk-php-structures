<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentName
 * @property string $Namespace
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string $PolicyArn
 * @property array<string, list<string>> $Identities
 */
class UpdateIAMPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentName: string,
     *     Namespace: string,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED',
     *     PolicyArn?: string,
     *     Identities?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
