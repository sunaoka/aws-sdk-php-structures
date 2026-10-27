<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MilestoneBasedInvestment|null $milestoneBasedInvestment
 * @property OutcomeBasedInvestment|null $outcomeBasedInvestment
 */
class Investment extends Shape
{
    /**
     * @param array{
     *     milestoneBasedInvestment?: MilestoneBasedInvestment|null,
     *     outcomeBasedInvestment?: OutcomeBasedInvestment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
