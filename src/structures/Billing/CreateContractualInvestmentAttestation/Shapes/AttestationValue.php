<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Amount|null $attestationAmount
 * @property list<AttestationQuantity>|null $attestationQuantities
 */
class AttestationValue extends Shape
{
    /**
     * @param array{
     *     attestationAmount?: Amount|null,
     *     attestationQuantities?: list<AttestationQuantity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
