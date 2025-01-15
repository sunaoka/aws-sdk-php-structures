<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingFormat|null $format
 * @property string $path
 */
class VirtualGatewayFileAccessLog extends Shape
{
    /**
     * @param array{
     *     format?: LoggingFormat|null,
     *     path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
