<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $PermissionSetArn
 */
class ListAccountAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
