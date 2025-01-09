<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TeacherModelConfig $teacherModelConfig
 */
class DistillationConfig extends Shape
{
    /**
     * @param array{teacherModelConfig: TeacherModelConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
