<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPUTER_VISION'|'COMPUTER_INPUT'|'FORWARD_MCP_TOOLS' $AgentAction
 * @property 'ENABLED'|'DISABLED' $Permission
 */
class AgentAccessSetting extends Shape
{
    /**
     * @param array{
     *     AgentAction: 'COMPUTER_VISION'|'COMPUTER_INPUT'|'FORWARD_MCP_TOOLS',
     *     Permission: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
