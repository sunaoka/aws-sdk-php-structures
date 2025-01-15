<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $resourceType
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 * @property 'ALL'|'AWS_MANAGED'|'CUSTOMER_MANAGED'|null $permissionType
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     permissionType?: 'ALL'|'AWS_MANAGED'|'CUSTOMER_MANAGED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
