<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaType
 * @property string $Value
 */
class TrialComponentArtifact extends Shape
{
    /**
     * @param array{
     *     MediaType?: string|null,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
