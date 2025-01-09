<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadOptions $readOptions
 */
class TsvOptions extends Shape
{
    /**
     * @param array{readOptions?: ReadOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
