<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableAutoRenew
 */
class RenewalTermConfiguration extends Shape
{
    /**
     * @param array{enableAutoRenew: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
