<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountName
 * @property Address $address
 * @property array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction> $addressRoleMap
 * @property 'TaxAddress'|'BillingAddress'|'ContactAddress' $addressType
 * @property string $seller
 */
class AccountMetaData extends Shape
{
    /**
     * @param array{
     *     accountName?: string,
     *     address?: Address,
     *     addressRoleMap?: array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction>,
     *     addressType?: 'TaxAddress'|'BillingAddress'|'ContactAddress',
     *     seller?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
