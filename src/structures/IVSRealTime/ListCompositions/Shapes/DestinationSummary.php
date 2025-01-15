<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED' $state
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class DestinationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'RECONNECTING'|'FAILED'|'STOPPED',
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
