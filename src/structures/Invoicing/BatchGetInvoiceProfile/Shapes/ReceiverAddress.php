<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressLine1
 * @property string|null $AddressLine2
 * @property string|null $AddressLine3
 * @property string|null $DistrictOrCounty
 * @property string|null $City
 * @property string|null $StateOrRegion
 * @property string|null $CountryCode
 * @property string|null $CompanyName
 * @property string|null $PostalCode
 */
class ReceiverAddress extends Shape
{
    /**
     * @param array{
     *     AddressLine1?: string|null,
     *     AddressLine2?: string|null,
     *     AddressLine3?: string|null,
     *     DistrictOrCounty?: string|null,
     *     City?: string|null,
     *     StateOrRegion?: string|null,
     *     CountryCode?: string|null,
     *     CompanyName?: string|null,
     *     PostalCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
