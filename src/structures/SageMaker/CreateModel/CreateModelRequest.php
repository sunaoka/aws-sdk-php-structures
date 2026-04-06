<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property Shapes\ContainerDefinition|null $PrimaryContainer
 * @property list<Shapes\ContainerDefinition>|null $Containers
 * @property Shapes\InferenceExecutionConfig|null $InferenceExecutionConfig
 * @property string|null $ExecutionRoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property bool|null $EnableNetworkIsolation
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     PrimaryContainer?: Shapes\ContainerDefinition|null,
     *     Containers?: list<Shapes\ContainerDefinition>|null,
     *     InferenceExecutionConfig?: Shapes\InferenceExecutionConfig|null,
     *     ExecutionRoleArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     EnableNetworkIsolation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
