<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingsOutputSummary|null $Findings
 */
class ExportOutputSummary extends Shape
{
    /**
     * @param array{Findings?: FindingsOutputSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
