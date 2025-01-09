<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JsonFormatRef> $json
 * @property string $text
 */
class LoggingFormat extends Shape
{
    /**
     * @param array{
     *     json?: list<JsonFormatRef>,
     *     text?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
