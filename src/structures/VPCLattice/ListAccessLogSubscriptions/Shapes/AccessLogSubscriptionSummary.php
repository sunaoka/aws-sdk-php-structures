<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListAccessLogSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $resourceId
 * @property string $resourceArn
 * @property string $destinationArn
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class AccessLogSubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     resourceId: string,
     *     resourceArn: string,
     *     destinationArn: string,
     *     serviceNetworkLogType?: 'SERVICE'|'RESOURCE'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
