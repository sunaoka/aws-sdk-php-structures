<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PricingTerm $usageBasedPricingTerm
 * @property LegalTerm $legalTerm
 * @property SupportTerm $supportTerm
 * @property ValidityTerm|null $validityTerm
 */
class TermDetails extends Shape
{
    /**
     * @param array{
     *     usageBasedPricingTerm: PricingTerm,
     *     legalTerm: LegalTerm,
     *     supportTerm: SupportTerm,
     *     validityTerm?: ValidityTerm|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
