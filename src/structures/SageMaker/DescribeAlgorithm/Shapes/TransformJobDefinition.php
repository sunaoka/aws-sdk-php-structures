<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxConcurrentTransforms
 * @property int $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord' $BatchStrategy
 * @property array<string, string> $Environment
 * @property TransformInput $TransformInput
 * @property TransformOutput $TransformOutput
 * @property TransformResources $TransformResources
 */
class TransformJobDefinition extends Shape
{
    /**
     * @param array{
     *     MaxConcurrentTransforms?: int,
     *     MaxPayloadInMB?: int,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord',
     *     Environment?: array<string, string>,
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
