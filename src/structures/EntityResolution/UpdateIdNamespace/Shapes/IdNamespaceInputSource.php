<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $schemaName
 */
class IdNamespaceInputSource extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     schemaName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
