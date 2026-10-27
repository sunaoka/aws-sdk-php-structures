<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $investmentId
 * @property string $outcomeDescription
 * @property Interval $attestationWindow
 * @property list<InvestmentRestriction>|null $investmentRestrictions
 * @property list<InvestmentMultiplier>|null $investmentMultipliers
 * @property Amount $disbursedValue
 */
class OutcomeBasedInvestment extends Shape
{
    /**
     * @param array{
     *     investmentId: string,
     *     outcomeDescription: string,
     *     attestationWindow: Interval,
     *     investmentRestrictions?: list<InvestmentRestriction>|null,
     *     investmentMultipliers?: list<InvestmentMultiplier>|null,
     *     disbursedValue: Amount
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
