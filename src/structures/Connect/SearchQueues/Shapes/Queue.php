<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $QueueArn
 * @property string|null $QueueId
 * @property string|null $Description
 * @property OutboundCallerConfig|null $OutboundCallerConfig
 * @property string|null $HoursOfOperationId
 * @property int<0, max>|null $MaxContacts
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property array<string, string>|null $Tags
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     QueueArn?: string|null,
     *     QueueId?: string|null,
     *     Description?: string|null,
     *     OutboundCallerConfig?: OutboundCallerConfig|null,
     *     HoursOfOperationId?: string|null,
     *     MaxContacts?: int<0, max>|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
