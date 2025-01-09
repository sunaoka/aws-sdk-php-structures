<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvOptions $tsvOptions
 * @property VcfOptions $vcfOptions
 */
class FormatOptions extends Shape
{
    /**
     * @param array{
     *     tsvOptions?: TsvOptions,
     *     vcfOptions?: VcfOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
