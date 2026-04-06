<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FlowDefinition $definition
 */
class ValidateFlowDefinitionRequest extends Request
{
    /**
     * @param array{definition: Shapes\FlowDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
