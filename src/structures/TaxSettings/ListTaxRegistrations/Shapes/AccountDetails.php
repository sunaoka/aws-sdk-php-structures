<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property AccountMetaData $accountMetaData
 * @property TaxInheritanceDetails $taxInheritanceDetails
 * @property TaxRegistrationWithJurisdiction $taxRegistration
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     accountMetaData?: AccountMetaData,
     *     taxInheritanceDetails?: TaxInheritanceDetails,
     *     taxRegistration?: TaxRegistrationWithJurisdiction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
