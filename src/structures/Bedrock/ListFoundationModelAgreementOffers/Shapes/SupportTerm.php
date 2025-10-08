<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $refundPolicyDescription
 */
class SupportTerm extends Shape
{
    /**
     * @param array{refundPolicyDescription?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
