<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListRetainedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topic
 * @property int $payloadSize
 * @property int $qos
 * @property int $lastModifiedTime
 */
class RetainedMessageSummary extends Shape
{
    /**
     * @param array{
     *     topic?: string,
     *     payloadSize?: int,
     *     qos?: int,
     *     lastModifiedTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
