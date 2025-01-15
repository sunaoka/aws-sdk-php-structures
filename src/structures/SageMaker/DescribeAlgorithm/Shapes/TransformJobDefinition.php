<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $MaxConcurrentTransforms
 * @property int<0, max>|null $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord'|null $BatchStrategy
 * @property array<string, string>|null $Environment
 * @property TransformInput $TransformInput
 * @property TransformOutput $TransformOutput
 * @property TransformResources $TransformResources
 */
class TransformJobDefinition extends Shape
{
    /**
     * @param array{
     *     MaxConcurrentTransforms?: int<0, max>|null,
     *     MaxPayloadInMB?: int<0, max>|null,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord'|null,
     *     Environment?: array<string, string>|null,
     *     TransformInput: TransformInput,
     *     TransformOutput: TransformOutput,
     *     TransformResources: TransformResources
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
