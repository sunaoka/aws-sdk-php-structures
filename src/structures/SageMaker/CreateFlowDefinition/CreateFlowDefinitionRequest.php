<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowDefinitionName
 * @property Shapes\HumanLoopRequestSource|null $HumanLoopRequestSource
 * @property Shapes\HumanLoopActivationConfig|null $HumanLoopActivationConfig
 * @property Shapes\HumanLoopConfig|null $HumanLoopConfig
 * @property Shapes\FlowDefinitionOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFlowDefinitionRequest extends Request
{
    /**
     * @param array{
     *     FlowDefinitionName: string,
     *     HumanLoopRequestSource?: Shapes\HumanLoopRequestSource|null,
     *     HumanLoopActivationConfig?: Shapes\HumanLoopActivationConfig|null,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig|null,
     *     OutputConfig: Shapes\FlowDefinitionOutputConfig,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
