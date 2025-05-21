<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateConnectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Tags|null $Tags
 * @property bool|null $Ipv6Enabled
 * @property string|null $RoutingEndpoint
 * @property string|null $AnycastIpListId
 * @property string|null $Status
 * @property bool|null $Enabled
 * @property bool|null $IsDefault
 */
class ConnectionGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: Tags|null,
     *     Ipv6Enabled?: bool|null,
     *     RoutingEndpoint?: string|null,
     *     AnycastIpListId?: string|null,
     *     Status?: string|null,
     *     Enabled?: bool|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
