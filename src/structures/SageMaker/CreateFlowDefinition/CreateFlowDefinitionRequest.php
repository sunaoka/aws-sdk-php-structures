<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowDefinitionName
 * @property Shapes\HumanLoopRequestSource $HumanLoopRequestSource
 * @property Shapes\HumanLoopActivationConfig $HumanLoopActivationConfig
 * @property Shapes\HumanLoopConfig $HumanLoopConfig
 * @property Shapes\FlowDefinitionOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateFlowDefinitionRequest extends Request
{
    /**
     * @param array{
     *     FlowDefinitionName: string,
     *     HumanLoopRequestSource?: Shapes\HumanLoopRequestSource,
     *     HumanLoopActivationConfig?: Shapes\HumanLoopActivationConfig,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig,
     *     OutputConfig: Shapes\FlowDefinitionOutputConfig,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
