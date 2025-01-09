<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkSubmit $sparkSubmit
 * @property Hive $hive
 */
class JobDriver extends Shape
{
    /**
     * @param array{
     *     sparkSubmit?: SparkSubmit,
     *     hive?: Hive
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
