<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source1
 * @property string $source2
 */
class SourceFiles extends Shape
{
    /**
     * @param array{
     *     source1: string,
     *     source2?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
