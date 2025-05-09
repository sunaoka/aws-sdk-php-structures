<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $AccountId
 * @property string $PermissionSetArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAccountAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     AccountId: string,
     *     PermissionSetArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
