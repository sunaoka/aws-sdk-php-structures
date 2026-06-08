<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC'|'PAN'|'NIP' $registrationType
 * @property string|null $legalName
 * @property Address|null $legalAddress
 * @property 'Business'|'Individual'|'Government'|null $sector
 * @property AdditionalInfoRequest|null $additionalTaxInformation
 * @property VerificationDetails|null $verificationDetails
 * @property string|null $certifiedEmailId
 */
class TaxRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC'|'PAN'|'NIP',
     *     legalName?: string|null,
     *     legalAddress?: Address|null,
     *     sector?: 'Business'|'Individual'|'Government'|null,
     *     additionalTaxInformation?: AdditionalInfoRequest|null,
     *     verificationDetails?: VerificationDetails|null,
     *     certifiedEmailId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
