<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source1
 * @property string|null $source2
 */
class SourceFiles extends Shape
{
    /**
     * @param array{
     *     source1: string,
     *     source2?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
