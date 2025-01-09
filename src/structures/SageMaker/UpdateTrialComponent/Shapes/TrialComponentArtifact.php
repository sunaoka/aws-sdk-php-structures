<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaType
 * @property string $Value
 */
class TrialComponentArtifact extends Shape
{
    /**
     * @param array{
     *     MediaType?: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
