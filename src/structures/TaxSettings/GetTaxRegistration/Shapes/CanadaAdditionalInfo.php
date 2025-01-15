<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $canadaQuebecSalesTaxNumber
 * @property string|null $canadaRetailSalesTaxNumber
 * @property bool|null $isResellerAccount
 * @property string|null $provincialSalesTaxId
 */
class CanadaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     canadaQuebecSalesTaxNumber?: string|null,
     *     canadaRetailSalesTaxNumber?: string|null,
     *     isResellerAccount?: bool|null,
     *     provincialSalesTaxId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
