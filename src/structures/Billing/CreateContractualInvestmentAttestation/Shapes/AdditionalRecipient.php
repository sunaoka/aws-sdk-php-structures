<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $email
 */
class AdditionalRecipient extends Shape
{
    /**
     * @param array{email: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
