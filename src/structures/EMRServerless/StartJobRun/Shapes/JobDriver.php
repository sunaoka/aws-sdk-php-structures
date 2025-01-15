<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkSubmit|null $sparkSubmit
 * @property Hive|null $hive
 */
class JobDriver extends Shape
{
    /**
     * @param array{
     *     sparkSubmit?: SparkSubmit|null,
     *     hive?: Hive|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
