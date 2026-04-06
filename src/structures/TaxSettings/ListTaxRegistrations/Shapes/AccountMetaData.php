<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountName
 * @property Address|null $address
 * @property array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction>|null $addressRoleMap
 * @property 'TaxAddress'|'BillingAddress'|'ContactAddress'|null $addressType
 * @property string|null $seller
 */
class AccountMetaData extends Shape
{
    /**
     * @param array{
     *     accountName?: string|null,
     *     address?: Address|null,
     *     addressRoleMap?: array<'TaxAddress'|'BillingAddress'|'ContactAddress', Jurisdiction>|null,
     *     addressType?: 'TaxAddress'|'BillingAddress'|'ContactAddress'|null,
     *     seller?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
