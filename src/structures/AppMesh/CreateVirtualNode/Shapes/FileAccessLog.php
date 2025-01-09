<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingFormat $format
 * @property string $path
 */
class FileAccessLog extends Shape
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
