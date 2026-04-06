<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uniqueIdentificationNumber
 * @property string|null $uniqueIdentificationNumberExpirationDate
 */
class EgyptAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     uniqueIdentificationNumber?: string|null,
     *     uniqueIdentificationNumberExpirationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
