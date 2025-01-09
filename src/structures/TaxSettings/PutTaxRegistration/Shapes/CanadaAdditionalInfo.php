<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $canadaQuebecSalesTaxNumber
 * @property string $canadaRetailSalesTaxNumber
 * @property bool $isResellerAccount
 * @property string $provincialSalesTaxId
 */
class CanadaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     canadaQuebecSalesTaxNumber?: string,
     *     canadaRetailSalesTaxNumber?: string,
     *     isResellerAccount?: bool,
     *     provincialSalesTaxId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
