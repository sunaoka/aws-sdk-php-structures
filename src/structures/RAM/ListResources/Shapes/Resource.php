<?php

namespace Sunaoka\Aws\Structures\RAM\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $type
 * @property string|null $resourceShareArn
 * @property string|null $resourceGroupArn
 * @property 'AVAILABLE'|'ZONAL_RESOURCE_INACCESSIBLE'|'LIMIT_EXCEEDED'|'UNAVAILABLE'|'PENDING'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property 'REGIONAL'|'GLOBAL'|null $resourceRegionScope
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     type?: string|null,
     *     resourceShareArn?: string|null,
     *     resourceGroupArn?: string|null,
     *     status?: 'AVAILABLE'|'ZONAL_RESOURCE_INACCESSIBLE'|'LIMIT_EXCEEDED'|'UNAVAILABLE'|'PENDING'|null,
     *     statusMessage?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     resourceRegionScope?: 'REGIONAL'|'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
