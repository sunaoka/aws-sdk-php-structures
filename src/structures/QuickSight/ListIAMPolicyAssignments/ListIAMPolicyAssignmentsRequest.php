<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string $Namespace
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListIAMPolicyAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED',
     *     Namespace: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
