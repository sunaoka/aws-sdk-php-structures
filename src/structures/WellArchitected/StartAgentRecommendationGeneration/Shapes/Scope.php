<?php

namespace Sunaoka\Aws\Structures\WellArchitected\StartAgentRecommendationGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property list<string>|null $goalIds
 * @property list<PillarItem>|null $items
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     pillars: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>,
     *     goalIds?: list<string>|null,
     *     items?: list<PillarItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
