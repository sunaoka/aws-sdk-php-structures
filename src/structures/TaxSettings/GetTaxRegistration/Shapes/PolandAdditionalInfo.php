<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $individualRegistrationNumber
 * @property bool|null $isGroupVatEnabled
 */
class PolandAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     individualRegistrationNumber?: string|null,
     *     isGroupVatEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
