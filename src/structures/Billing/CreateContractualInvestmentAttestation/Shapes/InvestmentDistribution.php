<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property Amount $investmentAmount
 */
class InvestmentDistribution extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     investmentAmount: Amount
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
