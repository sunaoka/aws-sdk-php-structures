<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $eventType
 * @property string $message
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property array<string, string>|null $attributes
 */
class TestRunEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     eventType: string,
     *     message: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
