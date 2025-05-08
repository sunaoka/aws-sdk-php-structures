<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListCustomerManagedPolicyReferencesInPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomerManagedPolicyReferencesInPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
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
