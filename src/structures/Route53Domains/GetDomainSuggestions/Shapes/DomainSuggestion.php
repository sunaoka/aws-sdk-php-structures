<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $Availability
 * @property PriceWithCurrency|null $Price
 */
class DomainSuggestion extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     Availability?: string|null,
     *     Price?: PriceWithCurrency|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
