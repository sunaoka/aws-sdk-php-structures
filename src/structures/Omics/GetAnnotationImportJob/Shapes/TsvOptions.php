<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadOptions|null $readOptions
 */
class TsvOptions extends Shape
{
    /**
     * @param array{readOptions?: ReadOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
