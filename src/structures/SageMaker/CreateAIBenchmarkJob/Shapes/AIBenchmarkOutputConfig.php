<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property AIMlflowConfig|null $MlflowConfig
 */
class AIBenchmarkOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     MlflowConfig?: AIMlflowConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
