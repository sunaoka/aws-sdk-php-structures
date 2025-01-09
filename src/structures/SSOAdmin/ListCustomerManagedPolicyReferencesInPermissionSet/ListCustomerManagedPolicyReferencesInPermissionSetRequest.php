<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListCustomerManagedPolicyReferencesInPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $PermissionSetArn
 */
class ListCustomerManagedPolicyReferencesInPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
