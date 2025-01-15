<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string|null $schemaName
 */
class IdNamespaceInputSource extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     schemaName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
