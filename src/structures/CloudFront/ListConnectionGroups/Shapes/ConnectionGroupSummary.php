<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Arn
 * @property string $RoutingEndpoint
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $ETag
 * @property string|null $AnycastIpListId
 * @property bool|null $Enabled
 * @property string|null $Status
 * @property bool|null $IsDefault
 */
class ConnectionGroupSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Arn: string,
     *     RoutingEndpoint: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     ETag: string,
     *     AnycastIpListId?: string|null,
     *     Enabled?: bool|null,
     *     Status?: string|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
