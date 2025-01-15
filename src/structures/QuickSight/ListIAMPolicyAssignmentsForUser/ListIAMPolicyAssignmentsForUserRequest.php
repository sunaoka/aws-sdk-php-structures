<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignmentsForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $UserName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $Namespace
 */
class ListIAMPolicyAssignmentsForUserRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     UserName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
