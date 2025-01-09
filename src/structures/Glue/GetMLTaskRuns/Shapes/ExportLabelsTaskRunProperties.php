<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputS3Path
 */
class ExportLabelsTaskRunProperties extends Shape
{
    /**
     * @param array{OutputS3Path?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
