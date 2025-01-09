<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies' $industries
 * @property string $kepEmailId
 * @property string $secondaryTaxId
 * @property string $taxOffice
 */
class TurkeyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     industries?: 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies',
     *     kepEmailId?: string,
     *     secondaryTaxId?: string,
     *     taxOffice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
