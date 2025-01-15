<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListIpRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $CidrIp
 * @property 'Adding'|'Added'|'Removing'|'Removed'|'AddFailed'|'RemoveFailed'|null $IpRouteStatusMsg
 * @property \Aws\Api\DateTimeResult|null $AddedDateTime
 * @property string|null $IpRouteStatusReason
 * @property string|null $Description
 */
class IpRouteInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     CidrIp?: string|null,
     *     IpRouteStatusMsg?: 'Adding'|'Added'|'Removing'|'Removed'|'AddFailed'|'RemoveFailed'|null,
     *     AddedDateTime?: \Aws\Api\DateTimeResult|null,
     *     IpRouteStatusReason?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
