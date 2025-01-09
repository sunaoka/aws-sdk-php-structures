<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentType
 * @property string $data
 */
class EventPayload extends Shape
{
    /**
     * @param array{
     *     contentType?: string,
     *     data?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
