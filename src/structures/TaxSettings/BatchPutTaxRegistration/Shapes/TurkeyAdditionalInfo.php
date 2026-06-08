<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taxOffice
 * @property string|null $kepEmailId
 * @property string|null $secondaryTaxId
 * @property 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies'|null $industries
 */
class TurkeyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxOffice?: string|null,
     *     kepEmailId?: string|null,
     *     secondaryTaxId?: string|null,
     *     industries?: 'CirculatingOrg'|'ProfessionalOrg'|'Banks'|'Insurance'|'PensionAndBenefitFunds'|'DevelopmentAgencies'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
