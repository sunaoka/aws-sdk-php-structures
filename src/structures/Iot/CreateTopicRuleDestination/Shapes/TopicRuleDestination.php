<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $statusReason
 * @property HttpUrlDestinationProperties|null $httpUrlProperties
 * @property VpcDestinationProperties|null $vpcProperties
 */
class TopicRuleDestination extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     status?: 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     statusReason?: string|null,
     *     httpUrlProperties?: HttpUrlDestinationProperties|null,
     *     vpcProperties?: VpcDestinationProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
