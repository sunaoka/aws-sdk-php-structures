<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isVatRegistered
 */
class PhilippinesAdditionalInfo extends Shape
{
    /**
     * @param array{isVatRegistered?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
