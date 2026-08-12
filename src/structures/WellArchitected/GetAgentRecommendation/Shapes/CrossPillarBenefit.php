<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE' $pillar
 * @property string $title
 * @property string $description
 * @property 'HIGH'|'MEDIUM'|'LOW' $impact
 */
class CrossPillarBenefit extends Shape
{
    /**
     * @param array{
     *     pillar: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE',
     *     title: string,
     *     description: string,
     *     impact: 'HIGH'|'MEDIUM'|'LOW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
