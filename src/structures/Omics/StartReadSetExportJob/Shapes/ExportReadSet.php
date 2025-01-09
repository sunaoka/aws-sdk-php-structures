<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $readSetId
 */
class ExportReadSet extends Shape
{
    /**
     * @param array{readSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
