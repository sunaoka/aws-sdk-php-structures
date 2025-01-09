<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aliasArn
 */
class AgentDescriptor extends Shape
{
    /**
     * @param array{aliasArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
