<?php

namespace Sunaoka\Aws\Structures\Connect\ListAgentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'ROUTABLE'|'CUSTOM'|'OFFLINE'|null $Type
 */
class AgentStatusSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'ROUTABLE'|'CUSTOM'|'OFFLINE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
