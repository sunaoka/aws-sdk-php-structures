<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property string|null $Source
 * @property list<string>|null $Resources
 * @property string|null $DetailType
 * @property string|null $Detail
 * @property string|null $EventBusName
 * @property string|null $TraceHeader
 */
class PutEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     Source?: string|null,
     *     Resources?: list<string>|null,
     *     DetailType?: string|null,
     *     Detail?: string|null,
     *     EventBusName?: string|null,
     *     TraceHeader?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
