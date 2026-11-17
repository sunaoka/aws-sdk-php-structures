<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE' $pillar
 * @property int $count
 */
class PillarCount extends Shape
{
    /**
     * @param array{
     *     pillar: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE',
     *     count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
