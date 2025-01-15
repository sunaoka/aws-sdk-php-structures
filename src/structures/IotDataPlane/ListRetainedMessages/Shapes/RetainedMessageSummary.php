<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListRetainedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $topic
 * @property int|null $payloadSize
 * @property int<0, 1>|null $qos
 * @property int|null $lastModifiedTime
 */
class RetainedMessageSummary extends Shape
{
    /**
     * @param array{
     *     topic?: string|null,
     *     payloadSize?: int|null,
     *     qos?: int<0, 1>|null,
     *     lastModifiedTime?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
