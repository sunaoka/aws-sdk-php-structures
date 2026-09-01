<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $minValue
 * @property string|null $maxValue
 * @property string|null $defaultValue
 */
class PercentageRange extends Shape
{
    /**
     * @param array{
     *     minValue?: string|null,
     *     maxValue?: string|null,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
