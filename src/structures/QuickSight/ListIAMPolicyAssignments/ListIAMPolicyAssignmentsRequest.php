<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 * @property string $Namespace
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListIAMPolicyAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'|null,
     *     Namespace: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
