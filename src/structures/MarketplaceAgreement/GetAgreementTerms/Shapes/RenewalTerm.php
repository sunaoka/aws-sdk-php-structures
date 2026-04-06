<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RenewalTermConfiguration|null $configuration
 * @property string|null $type
 */
class RenewalTerm extends Shape
{
    /**
     * @param array{
     *     configuration?: RenewalTermConfiguration|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
