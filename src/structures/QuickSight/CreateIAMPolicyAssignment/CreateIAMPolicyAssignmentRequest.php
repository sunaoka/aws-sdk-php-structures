<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentName
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string|null $PolicyArn
 * @property array<string, list<string>>|null $Identities
 * @property string $Namespace
 */
class CreateIAMPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentName: string,
     *     AssignmentStatus: 'ENABLED'|'DRAFT'|'DISABLED',
     *     PolicyArn?: string|null,
     *     Identities?: array<string, list<string>>|null,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
