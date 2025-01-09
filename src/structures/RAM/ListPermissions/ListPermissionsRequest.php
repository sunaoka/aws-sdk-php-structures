<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceType
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ALL'|'AWS_MANAGED'|'CUSTOMER_MANAGED' $permissionType
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     resourceType?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     permissionType?: 'ALL'|'AWS_MANAGED'|'CUSTOMER_MANAGED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
