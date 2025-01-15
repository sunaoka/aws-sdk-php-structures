<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies'|null $industries
 * @property string|null $kepEmailId
 * @property string|null $secondaryTaxId
 * @property string|null $taxOffice
 */
class TurkeyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     industries?: 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies'|null,
     *     kepEmailId?: string|null,
     *     secondaryTaxId?: string|null,
     *     taxOffice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
