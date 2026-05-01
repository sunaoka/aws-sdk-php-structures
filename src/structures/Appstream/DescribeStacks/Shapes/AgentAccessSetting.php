<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPUTER_VISION'|'COMPUTER_INPUT' $AgentAction
 * @property 'ENABLED'|'DISABLED' $Permission
 */
class AgentAccessSetting extends Shape
{
    /**
     * @param array{
     *     AgentAction: 'COMPUTER_VISION'|'COMPUTER_INPUT',
     *     Permission: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
