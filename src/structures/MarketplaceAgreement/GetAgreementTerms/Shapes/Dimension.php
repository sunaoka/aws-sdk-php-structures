<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionKey
 * @property int<0, max> $dimensionValue
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     dimensionKey: string,
     *     dimensionValue: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
