<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryPoint
 * @property string $s3Uri
 * @property 'NONE'|'GZIP'|null $compressionType
 */
class ScriptModeConfig extends Shape
{
    /**
     * @param array{
     *     entryPoint: string,
     *     s3Uri: string,
     *     compressionType?: 'NONE'|'GZIP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
