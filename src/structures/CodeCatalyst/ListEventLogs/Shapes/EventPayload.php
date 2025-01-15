<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contentType
 * @property string|null $data
 */
class EventPayload extends Shape
{
    /**
     * @param array{
     *     contentType?: string|null,
     *     data?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
