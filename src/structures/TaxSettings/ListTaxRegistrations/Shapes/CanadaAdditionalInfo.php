<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $provincialSalesTaxId
 * @property string|null $canadaQuebecSalesTaxNumber
 * @property string|null $canadaRetailSalesTaxNumber
 * @property bool|null $isResellerAccount
 */
class CanadaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     provincialSalesTaxId?: string|null,
     *     canadaQuebecSalesTaxNumber?: string|null,
     *     canadaRetailSalesTaxNumber?: string|null,
     *     isResellerAccount?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
