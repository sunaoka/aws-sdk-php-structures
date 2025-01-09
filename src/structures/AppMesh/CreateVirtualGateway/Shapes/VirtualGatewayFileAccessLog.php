<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingFormat $format
 * @property string $path
 */
class VirtualGatewayFileAccessLog extends Shape
{
    /**
     * @param array{
     *     format?: LoggingFormat,
     *     path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
