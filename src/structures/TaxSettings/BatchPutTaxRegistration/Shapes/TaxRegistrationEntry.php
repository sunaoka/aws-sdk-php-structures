<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdditionalInfoRequest|null $additionalTaxInformation
 * @property string|null $certifiedEmailId
 * @property Address|null $legalAddress
 * @property string|null $legalName
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC' $registrationType
 * @property 'Business'|'Individual'|'Government'|null $sector
 * @property VerificationDetails|null $verificationDetails
 */
class TaxRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     additionalTaxInformation?: AdditionalInfoRequest|null,
     *     certifiedEmailId?: string|null,
     *     legalAddress?: Address|null,
     *     legalName?: string|null,
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC',
     *     sector?: 'Business'|'Individual'|'Government'|null,
     *     verificationDetails?: VerificationDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
