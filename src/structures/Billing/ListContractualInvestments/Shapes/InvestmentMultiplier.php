<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string $investmentAttestationInputUnit
 * @property 'PERCENTAGE'|'CURRENCY_AMOUNT' $multiplierType
 */
class InvestmentMultiplier extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     investmentAttestationInputUnit: string,
     *     multiplierType: 'PERCENTAGE'|'CURRENCY_AMOUNT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
