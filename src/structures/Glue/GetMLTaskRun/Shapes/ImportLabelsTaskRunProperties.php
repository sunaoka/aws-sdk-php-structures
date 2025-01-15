<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputS3Path
 * @property bool|null $Replace
 */
class ImportLabelsTaskRunProperties extends Shape
{
    /**
     * @param array{
     *     InputS3Path?: string|null,
     *     Replace?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
