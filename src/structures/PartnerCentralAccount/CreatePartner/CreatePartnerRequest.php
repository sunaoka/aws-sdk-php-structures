<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreatePartner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $ClientToken
 * @property string $LegalName
 * @property 'SOFTWARE_PRODUCTS'|'CONSULTING_SERVICES'|'PROFESSIONAL_SERVICES'|'MANAGED_SERVICES'|'HARDWARE_PRODUCTS'|'COMMUNICATION_SERVICES'|'VALUE_ADDED_RESALE_AWS_SERVICES'|'TRAINING_SERVICES' $PrimarySolutionType
 * @property Shapes\AllianceLeadContact $AllianceLeadContact
 * @property string $EmailVerificationCode
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePartnerRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken?: string|null,
     *     LegalName: string,
     *     PrimarySolutionType: 'SOFTWARE_PRODUCTS'|'CONSULTING_SERVICES'|'PROFESSIONAL_SERVICES'|'MANAGED_SERVICES'|'HARDWARE_PRODUCTS'|'COMMUNICATION_SERVICES'|'VALUE_ADDED_RESALE_AWS_SERVICES'|'TRAINING_SERVICES',
     *     AllianceLeadContact: Shapes\AllianceLeadContact,
     *     EmailVerificationCode: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
