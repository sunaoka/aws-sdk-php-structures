<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rawData
 * @property string $source
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string|null $triggerArn
 */
class TriggerDetails extends Shape
{
    /**
     * @param array{
     *     rawData?: string|null,
     *     source: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     triggerArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
