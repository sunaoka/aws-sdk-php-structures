<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StartHumanLoop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanLoopName
 * @property string $FlowDefinitionArn
 * @property Shapes\HumanLoopInput $HumanLoopInput
 * @property Shapes\HumanLoopDataAttributes $DataAttributes
 */
class StartHumanLoopRequest extends Request
{
    /**
     * @param array{
     *     HumanLoopName: string,
     *     FlowDefinitionArn: string,
     *     HumanLoopInput: Shapes\HumanLoopInput,
     *     DataAttributes?: Shapes\HumanLoopDataAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
