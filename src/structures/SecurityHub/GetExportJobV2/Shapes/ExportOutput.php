<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetExportJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingsOutput|null $Findings
 */
class ExportOutput extends Shape
{
    /**
     * @param array{Findings?: FindingsOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
