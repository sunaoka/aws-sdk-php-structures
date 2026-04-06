<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property AccountMetaData|null $accountMetaData
 * @property TaxInheritanceDetails|null $taxInheritanceDetails
 * @property TaxRegistrationWithJurisdiction|null $taxRegistration
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     accountMetaData?: AccountMetaData|null,
     *     taxInheritanceDetails?: TaxInheritanceDetails|null,
     *     taxRegistration?: TaxRegistrationWithJurisdiction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
