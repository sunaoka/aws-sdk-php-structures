<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ccmCode
 * @property string $legalNatureCode
 */
class BrazilAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     ccmCode?: string,
     *     legalNatureCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
