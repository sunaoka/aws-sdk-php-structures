<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentCollaborators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $aliasArn
 */
class AgentDescriptor extends Shape
{
    /**
     * @param array{aliasArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
