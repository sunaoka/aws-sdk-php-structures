<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC'|'PAN'|'NIP' $registrationType
 * @property string $legalName
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 * @property 'Business'|'Individual'|'Government'|null $sector
 * @property list<TaxDocumentMetadata>|null $taxDocumentMetadatas
 * @property string|null $certifiedEmailId
 * @property AdditionalInfoResponse|null $additionalTaxInformation
 * @property Jurisdiction $jurisdiction
 */
class TaxRegistrationWithJurisdiction extends Shape
{
    /**
     * @param array{
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC'|'PAN'|'NIP',
     *     legalName: string,
     *     status: 'Verified'|'Pending'|'Deleted'|'Rejected',
     *     sector?: 'Business'|'Individual'|'Government'|null,
     *     taxDocumentMetadatas?: list<TaxDocumentMetadata>|null,
     *     certifiedEmailId?: string|null,
     *     additionalTaxInformation?: AdditionalInfoResponse|null,
     *     jurisdiction: Jurisdiction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
