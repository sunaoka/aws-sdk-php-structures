<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED' $state
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property DestinationConfiguration $configuration
 * @property DestinationDetail $detail
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     configuration: DestinationConfiguration,
     *     detail?: DestinationDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
