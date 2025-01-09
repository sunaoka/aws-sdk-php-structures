<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputS3Path
 * @property bool $Replace
 */
class ImportLabelsTaskRunProperties extends Shape
{
    /**
     * @param array{
     *     InputS3Path?: string,
     *     Replace?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
