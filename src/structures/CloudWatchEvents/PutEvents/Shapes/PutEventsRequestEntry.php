<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Source
 * @property list<string> $Resources
 * @property string $DetailType
 * @property string $Detail
 * @property string $EventBusName
 * @property string $TraceHeader
 */
class PutEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult,
     *     Source?: string,
     *     Resources?: list<string>,
     *     DetailType?: string,
     *     Detail?: string,
     *     EventBusName?: string,
     *     TraceHeader?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
