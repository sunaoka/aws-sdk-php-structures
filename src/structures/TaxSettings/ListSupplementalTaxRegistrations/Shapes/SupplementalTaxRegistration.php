<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListSupplementalTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registrationId
 * @property 'VAT' $registrationType
 * @property string $legalName
 * @property Address $address
 * @property string $authorityId
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 */
class SupplementalTaxRegistration extends Shape
{
    /**
     * @param array{
     *     registrationId: string,
     *     registrationType: 'VAT',
     *     legalName: string,
     *     address: Address,
     *     authorityId: string,
     *     status: 'Verified'|'Pending'|'Deleted'|'Rejected'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
