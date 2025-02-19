<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdditionalInfoResponse|null $additionalTaxInformation
 * @property string|null $certifiedEmailId
 * @property Address $legalAddress
 * @property string $legalName
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC' $registrationType
 * @property 'Business'|'Individual'|'Government'|null $sector
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 * @property list<TaxDocumentMetadata>|null $taxDocumentMetadatas
 */
class TaxRegistration extends Shape
{
    /**
     * @param array{
     *     additionalTaxInformation?: AdditionalInfoResponse|null,
     *     certifiedEmailId?: string|null,
     *     legalAddress: Address,
     *     legalName: string,
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC',
     *     sector?: 'Business'|'Individual'|'Government'|null,
     *     status: 'Verified'|'Pending'|'Deleted'|'Rejected',
     *     taxDocumentMetadatas?: list<TaxDocumentMetadata>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
