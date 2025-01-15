<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingFormat|null $format
 * @property string $path
 */
class FileAccessLog extends Shape
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
