<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property Shapes\ContainerDefinition $PrimaryContainer
 * @property list<Shapes\ContainerDefinition> $Containers
 * @property Shapes\InferenceExecutionConfig $InferenceExecutionConfig
 * @property string $ExecutionRoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\VpcConfig $VpcConfig
 * @property bool $EnableNetworkIsolation
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     PrimaryContainer?: Shapes\ContainerDefinition,
     *     Containers?: list<Shapes\ContainerDefinition>,
     *     InferenceExecutionConfig?: Shapes\InferenceExecutionConfig,
     *     ExecutionRoleArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     VpcConfig?: Shapes\VpcConfig,
     *     EnableNetworkIsolation?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
