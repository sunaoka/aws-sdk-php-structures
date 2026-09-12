<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortalSuppliers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SupplierIdentifier
 * @property string|null $SellerOfRecord
 * @property string|null $CountryCode
 * @property 'PROD'|'TEST'|null $Environment
 */
class ProcurementPortalSupplier extends Shape
{
    /**
     * @param array{
     *     SupplierIdentifier: string,
     *     SellerOfRecord?: string|null,
     *     CountryCode?: string|null,
     *     Environment?: 'PROD'|'TEST'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
