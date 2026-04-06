<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InvoiceUnitArns
 * @property list<string>|null $SellerOfRecords
 */
class ProcurementPortalPreferenceSelector extends Shape
{
    /**
     * @param array{
     *     InvoiceUnitArns?: list<string>|null,
     *     SellerOfRecords?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
