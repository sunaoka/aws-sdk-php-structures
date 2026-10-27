<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attestationVolume
 * @property string $attestationUnit
 */
class AttestationQuantity extends Shape
{
    /**
     * @param array{
     *     attestationVolume: string,
     *     attestationUnit: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
