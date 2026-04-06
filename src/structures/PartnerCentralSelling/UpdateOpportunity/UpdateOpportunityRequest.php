<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property 'Yes'|'No'|null $NationalSecurity
 * @property string|null $PartnerOpportunityIdentifier
 * @property Shapes\Customer|null $Customer
 * @property Shapes\Project|null $Project
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property Shapes\Marketing|null $Marketing
 * @property Shapes\SoftwareRevenue|null $SoftwareRevenue
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $Identifier
 * @property Shapes\LifeCycle|null $LifeCycle
 */
class UpdateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null,
     *     NationalSecurity?: 'Yes'|'No'|null,
     *     PartnerOpportunityIdentifier?: string|null,
     *     Customer?: Shapes\Customer|null,
     *     Project?: Shapes\Project|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     Marketing?: Shapes\Marketing|null,
     *     SoftwareRevenue?: Shapes\SoftwareRevenue|null,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     Identifier: string,
     *     LifeCycle?: Shapes\LifeCycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
