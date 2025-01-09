<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $individualRegistrationNumber
 * @property bool $isGroupVatEnabled
 */
class PolandAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     individualRegistrationNumber?: string,
     *     isGroupVatEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
