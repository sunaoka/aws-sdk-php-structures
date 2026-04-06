<?php

namespace Sunaoka\Aws\Structures\DataSync\ListAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AgentArn
 * @property string|null $Name
 * @property 'ONLINE'|'OFFLINE'|null $Status
 * @property Platform|null $Platform
 */
class AgentListEntry extends Shape
{
    /**
     * @param array{
     *     AgentArn?: string|null,
     *     Name?: string|null,
     *     Status?: 'ONLINE'|'OFFLINE'|null,
     *     Platform?: Platform|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
