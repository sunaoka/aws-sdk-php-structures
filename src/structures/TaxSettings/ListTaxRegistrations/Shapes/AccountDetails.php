<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property TaxRegistrationWithJurisdiction|null $taxRegistration
 * @property TaxInheritanceDetails|null $taxInheritanceDetails
 * @property AccountMetaData|null $accountMetaData
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     taxRegistration?: TaxRegistrationWithJurisdiction|null,
     *     taxInheritanceDetails?: TaxInheritanceDetails|null,
     *     accountMetaData?: AccountMetaData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
