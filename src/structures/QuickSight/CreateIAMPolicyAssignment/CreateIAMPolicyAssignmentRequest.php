<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentName
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string $PolicyArn
 * @property array<string, list<string>> $Identities
 * @property string $Namespace
 */
class CreateIAMPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentName: string,
     *     AssignmentStatus: 'ENABLED'|'DRAFT'|'DISABLED',
     *     PolicyArn?: string,
     *     Identities?: array<string, list<string>>,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
