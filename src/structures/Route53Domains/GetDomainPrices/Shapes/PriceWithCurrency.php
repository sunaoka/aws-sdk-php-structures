<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainPrices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Price
 * @property string $Currency
 * @property 'STANDARD'|'REGISTRY_PREMIUM'|null $PriceType
 */
class PriceWithCurrency extends Shape
{
    /**
     * @param array{
     *     Price: double,
     *     Currency: string,
     *     PriceType?: 'STANDARD'|'REGISTRY_PREMIUM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
