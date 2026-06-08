<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountName
 * @property string|null $seller
 * @property Address|null $address
 * @property 'TaxAddress'|'BillingAddress'|'ContactAddress'|null $addressType
 * @property array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction>|null $addressRoleMap
 */
class AccountMetaData extends Shape
{
    /**
     * @param array{
     *     accountName?: string|null,
     *     seller?: string|null,
     *     address?: Address|null,
     *     addressType?: 'TaxAddress'|'BillingAddress'|'ContactAddress'|null,
     *     addressRoleMap?: array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
