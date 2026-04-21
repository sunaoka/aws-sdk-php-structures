<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 */
class AIBenchmarkOutputConfig extends Shape
{
    /**
     * @param array{S3OutputLocation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
