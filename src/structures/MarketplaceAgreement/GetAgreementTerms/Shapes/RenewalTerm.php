<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RenewalTermConfiguration $configuration
 * @property string $type
 */
class RenewalTerm extends Shape
{
    /**
     * @param array{
     *     configuration?: RenewalTermConfiguration,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
