<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $MaxConcurrentTransforms
 * @property int<0, max> $MaxPayloadInMB
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
     *     MaxConcurrentTransforms?: int<0, max>,
     *     MaxPayloadInMB?: int<0, max>,
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
