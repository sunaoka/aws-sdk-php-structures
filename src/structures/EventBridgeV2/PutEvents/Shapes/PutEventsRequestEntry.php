<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $DetailType
 * @property string|null $Detail
 * @property list<string>|null $Resources
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property PutEventsSystemMetadata|null $SystemMetadata
 */
class PutEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     DetailType: string,
     *     Detail?: string|null,
     *     Resources?: list<string>|null,
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     SystemMetadata?: PutEventsSystemMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
