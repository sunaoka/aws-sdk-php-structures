<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListSupplementalTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Address $address
 * @property string $authorityId
 * @property string $legalName
 * @property string $registrationId
 * @property 'VAT' $registrationType
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 */
class SupplementalTaxRegistration extends Shape
{
    /**
     * @param array{
     *     address: Address,
     *     authorityId: string,
     *     legalName: string,
     *     registrationId: string,
     *     registrationType: 'VAT',
     *     status: 'Verified'|'Pending'|'Deleted'|'Rejected'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
