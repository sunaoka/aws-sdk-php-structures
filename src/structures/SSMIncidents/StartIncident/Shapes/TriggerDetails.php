<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rawData
 * @property string $source
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $triggerArn
 */
class TriggerDetails extends Shape
{
    /**
     * @param array{
     *     rawData?: string,
     *     source: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     triggerArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
