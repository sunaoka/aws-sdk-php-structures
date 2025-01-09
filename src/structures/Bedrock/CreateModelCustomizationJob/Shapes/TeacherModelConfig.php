<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $teacherModelIdentifier
 * @property int $maxResponseLengthForInference
 */
class TeacherModelConfig extends Shape
{
    /**
     * @param array{
     *     teacherModelIdentifier: string,
     *     maxResponseLengthForInference?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
