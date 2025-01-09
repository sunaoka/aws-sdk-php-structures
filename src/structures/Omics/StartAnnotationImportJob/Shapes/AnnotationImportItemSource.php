<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 */
class AnnotationImportItemSource extends Shape
{
    /**
     * @param array{source: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
