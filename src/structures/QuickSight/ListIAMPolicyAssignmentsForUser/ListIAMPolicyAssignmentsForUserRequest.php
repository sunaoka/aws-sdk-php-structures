<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignmentsForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $UserName
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $Namespace
 */
class ListIAMPolicyAssignmentsForUserRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     UserName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
