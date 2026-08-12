<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE' $pillar
 * @property string $title
 * @property string $description
 * @property 'LOW'|'MEDIUM'|'HIGH' $risk
 * @property string $mitigation
 * @property string|null $riskExplanation
 */
class TradeOff extends Shape
{
    /**
     * @param array{
     *     pillar: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE',
     *     title: string,
     *     description: string,
     *     risk: 'LOW'|'MEDIUM'|'HIGH',
     *     mitigation: string,
     *     riskExplanation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
