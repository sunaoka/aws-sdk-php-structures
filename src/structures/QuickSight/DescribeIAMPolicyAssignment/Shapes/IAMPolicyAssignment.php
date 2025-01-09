<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIAMPolicyAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentId
 * @property string $AssignmentName
 * @property string $PolicyArn
 * @property array<string, list<string>> $Identities
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 */
class IAMPolicyAssignment extends Shape
{
    /**
     * @param array{
     *     AwsAccountId?: string,
     *     AssignmentId?: string,
     *     AssignmentName?: string,
     *     PolicyArn?: string,
     *     Identities?: array<string, list<string>>,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
