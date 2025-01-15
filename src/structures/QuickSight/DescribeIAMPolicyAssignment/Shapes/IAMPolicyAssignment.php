<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIAMPolicyAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsAccountId
 * @property string|null $AssignmentId
 * @property string|null $AssignmentName
 * @property string|null $PolicyArn
 * @property array<string, list<string>>|null $Identities
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 */
class IAMPolicyAssignment extends Shape
{
    /**
     * @param array{
     *     AwsAccountId?: string|null,
     *     AssignmentId?: string|null,
     *     AssignmentName?: string|null,
     *     PolicyArn?: string|null,
     *     Identities?: array<string, list<string>>|null,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
