<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttestationValue $attestationValue
 * @property list<InvestmentDistribution>|null $investmentDistributions
 */
class AttestationDetails extends Shape
{
    /**
     * @param array{
     *     attestationValue: AttestationValue,
     *     investmentDistributions?: list<InvestmentDistribution>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
