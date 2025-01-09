<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $PermissionSetArn
 */
class ListAccountAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
