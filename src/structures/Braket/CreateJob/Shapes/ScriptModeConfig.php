<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP' $compressionType
 * @property string $entryPoint
 * @property string $s3Uri
 */
class ScriptModeConfig extends Shape
{
    /**
     * @param array{
     *     compressionType?: 'NONE'|'GZIP',
     *     entryPoint: string,
     *     s3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
