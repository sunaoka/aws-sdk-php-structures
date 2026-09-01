<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 */
class FixedPercentage extends Shape
{
    /**
     * @param array{value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
