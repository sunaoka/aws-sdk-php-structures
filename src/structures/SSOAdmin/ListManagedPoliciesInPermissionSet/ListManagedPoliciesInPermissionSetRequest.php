<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListManagedPoliciesInPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $PermissionSetArn
 */
class ListManagedPoliciesInPermissionSetRequest extends Request
{
    /**
     * @param array{
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
