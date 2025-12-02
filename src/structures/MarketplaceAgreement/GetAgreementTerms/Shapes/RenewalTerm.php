<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property RenewalTermConfiguration|null $configuration
 */
class RenewalTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     configuration?: RenewalTermConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
