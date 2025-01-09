<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdditionalInfoResponse $additionalTaxInformation
 * @property string $certifiedEmailId
 * @property Address $legalAddress
 * @property string $legalName
 * @property string $registrationId
 * @property 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC' $registrationType
 * @property 'Business'|'Individual'|'Government' $sector
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 * @property list<TaxDocumentMetadata> $taxDocumentMetadatas
 */
class TaxRegistration extends Shape
{
    /**
     * @param array{
     *     additionalTaxInformation?: AdditionalInfoResponse,
     *     certifiedEmailId?: string,
     *     legalAddress: Address,
     *     legalName: string,
     *     registrationId: string,
     *     registrationType: 'VAT'|'GST'|'CPF'|'CNPJ'|'SST'|'TIN'|'NRIC',
     *     sector?: 'Business'|'Individual'|'Government',
     *     status: 'Verified'|'Pending'|'Deleted'|'Rejected',
     *     taxDocumentMetadatas?: list<TaxDocumentMetadata>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
