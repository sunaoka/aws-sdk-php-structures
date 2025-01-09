<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $QueueArn
 * @property string $QueueId
 * @property string $Description
 * @property OutboundCallerConfig $OutboundCallerConfig
 * @property OutboundEmailConfig $OutboundEmailConfig
 * @property string $HoursOfOperationId
 * @property int $MaxContacts
 * @property 'ENABLED'|'DISABLED' $Status
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     QueueArn?: string,
     *     QueueId?: string,
     *     Description?: string,
     *     OutboundCallerConfig?: OutboundCallerConfig,
     *     OutboundEmailConfig?: OutboundEmailConfig,
     *     HoursOfOperationId?: string,
     *     MaxContacts?: int,
     *     Status?: 'ENABLED'|'DISABLED',
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
