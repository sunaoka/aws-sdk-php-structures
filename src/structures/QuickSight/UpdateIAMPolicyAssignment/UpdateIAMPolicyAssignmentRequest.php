<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentName
 * @property string $Namespace
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 * @property string|null $PolicyArn
 * @property array<string, list<string>>|null $Identities
 */
class UpdateIAMPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentName: string,
     *     Namespace: string,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'|null,
     *     PolicyArn?: string|null,
     *     Identities?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
