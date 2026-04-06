<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListAccessLogSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $destinationArn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $resourceArn
 * @property string $resourceId
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 */
class AccessLogSubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     destinationArn: string,
     *     id: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     resourceArn: string,
     *     resourceId: string,
     *     serviceNetworkLogType?: 'SERVICE'|'RESOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
