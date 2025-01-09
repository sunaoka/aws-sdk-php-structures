<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $FlowName
 * @property string $KmsArn
 * @property SourceFlowConfig $SourceFlowConfig
 * @property list<Task> $Tasks
 * @property TriggerConfig $TriggerConfig
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     FlowName: string,
     *     KmsArn: string,
     *     SourceFlowConfig: SourceFlowConfig,
     *     Tasks: list<Task>,
     *     TriggerConfig: TriggerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
