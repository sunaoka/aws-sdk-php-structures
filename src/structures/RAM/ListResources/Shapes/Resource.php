<?php

namespace Sunaoka\Aws\Structures\RAM\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $type
 * @property string $resourceShareArn
 * @property string $resourceGroupArn
 * @property 'AVAILABLE'|'ZONAL_RESOURCE_INACCESSIBLE'|'LIMIT_EXCEEDED'|'UNAVAILABLE'|'PENDING' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     type?: string,
     *     resourceShareArn?: string,
     *     resourceGroupArn?: string,
     *     status?: 'AVAILABLE'|'ZONAL_RESOURCE_INACCESSIBLE'|'LIMIT_EXCEEDED'|'UNAVAILABLE'|'PENDING',
     *     statusMessage?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     resourceRegionScope?: 'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
