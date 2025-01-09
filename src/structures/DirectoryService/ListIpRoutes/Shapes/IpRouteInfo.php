<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListIpRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $CidrIp
 * @property 'Adding'|'Added'|'Removing'|'Removed'|'AddFailed'|'RemoveFailed' $IpRouteStatusMsg
 * @property \Aws\Api\DateTimeResult $AddedDateTime
 * @property string $IpRouteStatusReason
 * @property string $Description
 */
class IpRouteInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     CidrIp?: string,
     *     IpRouteStatusMsg?: 'Adding'|'Added'|'Removing'|'Removed'|'AddFailed'|'RemoveFailed',
     *     AddedDateTime?: \Aws\Api\DateTimeResult,
     *     IpRouteStatusReason?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
