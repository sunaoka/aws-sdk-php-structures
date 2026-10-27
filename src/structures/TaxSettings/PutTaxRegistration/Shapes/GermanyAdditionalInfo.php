<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $economicIdentificationNumber
 * @property string|null $steuernummer
 */
class GermanyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     economicIdentificationNumber?: string|null,
     *     steuernummer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
