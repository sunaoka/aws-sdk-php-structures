<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdditionalInfoRequest $additionalTaxInformation
 * @property string $certifiedEmailId
 * @property Address $legalAddress
 * @property string $legalName
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC' $registrationType
 * @property 'Business'|'Individual'|'Government' $sector
 * @property VerificationDetails $verificationDetails
 */
class TaxRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     additionalTaxInformation?: AdditionalInfoRequest,
     *     certifiedEmailId?: string,
     *     legalAddress?: Address,
     *     legalName?: string,
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC',
     *     sector?: 'Business'|'Individual'|'Government',
     *     verificationDetails?: VerificationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
