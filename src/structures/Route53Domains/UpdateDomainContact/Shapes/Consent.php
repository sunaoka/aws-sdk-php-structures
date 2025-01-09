<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxPrice
 * @property string $Currency
 */
class Consent extends Shape
{
    /**
     * @param array{
     *     MaxPrice: double,
     *     Currency: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
