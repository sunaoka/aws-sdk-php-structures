<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TsvOptions|null $tsvOptions
 * @property VcfOptions|null $vcfOptions
 */
class FormatOptions extends Shape
{
    /**
     * @param array{
     *     tsvOptions?: TsvOptions|null,
     *     vcfOptions?: VcfOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
