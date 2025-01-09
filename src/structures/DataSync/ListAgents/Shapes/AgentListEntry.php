<?php

namespace Sunaoka\Aws\Structures\DataSync\ListAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AgentArn
 * @property string $Name
 * @property 'ONLINE'|'OFFLINE' $Status
 * @property Platform $Platform
 */
class AgentListEntry extends Shape
{
    /**
     * @param array{
     *     AgentArn?: string,
     *     Name?: string,
     *     Status?: 'ONLINE'|'OFFLINE',
     *     Platform?: Platform
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
