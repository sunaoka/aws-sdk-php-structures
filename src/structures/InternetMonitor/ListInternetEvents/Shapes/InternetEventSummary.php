<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListInternetEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $EventArn
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property ClientLocation $ClientLocation
 * @property 'AVAILABILITY'|'PERFORMANCE' $EventType
 * @property 'ACTIVE'|'RESOLVED' $EventStatus
 */
class InternetEventSummary extends Shape
{
    /**
     * @param array{
     *     EventId: string,
     *     EventArn: string,
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     ClientLocation: ClientLocation,
     *     EventType: 'AVAILABILITY'|'PERFORMANCE',
     *     EventStatus: 'ACTIVE'|'RESOLVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
