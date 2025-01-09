<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressLine1
 * @property string $AddressLine2
 * @property string $AddressLine3
 * @property string $DistrictOrCounty
 * @property string $City
 * @property string $StateOrRegion
 * @property string $CountryCode
 * @property string $CompanyName
 * @property string $PostalCode
 */
class ReceiverAddress extends Shape
{
    /**
     * @param array{
     *     AddressLine1?: string,
     *     AddressLine2?: string,
     *     AddressLine3?: string,
     *     DistrictOrCounty?: string,
     *     City?: string,
     *     StateOrRegion?: string,
     *     CountryCode?: string,
     *     CompanyName?: string,
     *     PostalCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
