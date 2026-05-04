<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliverySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property list<string>|null $resourceArns
 * @property string|null $service
 * @property string|null $logType
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $deliverySourceConfiguration
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property 'RESOURCE_DELETED'|null $statusReason
 */
class DeliverySource extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     resourceArns?: list<string>|null,
     *     service?: string|null,
     *     logType?: string|null,
     *     tags?: array<string, string>|null,
     *     deliverySourceConfiguration?: array<string, string>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     statusReason?: 'RESOURCE_DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
