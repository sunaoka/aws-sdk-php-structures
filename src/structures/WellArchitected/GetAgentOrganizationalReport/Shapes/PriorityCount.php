<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGH'|'MEDIUM'|'LOW' $priority
 * @property int $count
 */
class PriorityCount extends Shape
{
    /**
     * @param array{
     *     priority: 'HIGH'|'MEDIUM'|'LOW',
     *     count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
