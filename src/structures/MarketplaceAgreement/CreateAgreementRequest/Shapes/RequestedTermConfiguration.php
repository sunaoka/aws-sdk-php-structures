<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurableUpfrontPricingTermConfiguration|null $configurableUpfrontPricingTermConfiguration
 * @property RenewalTermConfiguration|null $renewalTermConfiguration
 * @property VariablePaymentTermConfiguration|null $variablePaymentTermConfiguration
 */
class RequestedTermConfiguration extends Shape
{
    /**
     * @param array{
     *     configurableUpfrontPricingTermConfiguration?: ConfigurableUpfrontPricingTermConfiguration|null,
     *     renewalTermConfiguration?: RenewalTermConfiguration|null,
     *     variablePaymentTermConfiguration?: VariablePaymentTermConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
