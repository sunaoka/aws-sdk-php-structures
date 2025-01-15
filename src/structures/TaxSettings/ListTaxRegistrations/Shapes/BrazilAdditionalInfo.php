<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ccmCode
 * @property string|null $legalNatureCode
 */
class BrazilAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     ccmCode?: string|null,
     *     legalNatureCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
