<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED' $state
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class DestinationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
