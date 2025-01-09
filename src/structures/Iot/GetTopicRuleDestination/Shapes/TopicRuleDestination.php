<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $statusReason
 * @property HttpUrlDestinationProperties $httpUrlProperties
 * @property VpcDestinationProperties $vpcProperties
 */
class TopicRuleDestination extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     status?: 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     statusReason?: string,
     *     httpUrlProperties?: HttpUrlDestinationProperties,
     *     vpcProperties?: VpcDestinationProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
