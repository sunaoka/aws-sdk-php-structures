<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JsonFormatRef>|null $json
 * @property string|null $text
 */
class LoggingFormat extends Shape
{
    /**
     * @param array{
     *     json?: list<JsonFormatRef>|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
