<?php

namespace Sunaoka\Aws\Structures\Omics\StartVariantImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 */
class VariantImportItemSource extends Shape
{
    /**
     * @param array{source: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
