<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputS3Path
 */
class LabelingSetGenerationTaskRunProperties extends Shape
{
    /**
     * @param array{OutputS3Path?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
