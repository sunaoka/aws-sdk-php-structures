<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE' $pillar
 * @property list<string> $ids
 */
class PillarItem extends Shape
{
    /**
     * @param array{
     *     pillar: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE',
     *     ids: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
