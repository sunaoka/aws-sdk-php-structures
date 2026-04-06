<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\Customer|null $Customer
 * @property string $Identifier
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property Shapes\LifeCycle|null $LifeCycle
 * @property Shapes\Marketing|null $Marketing
 * @property 'Yes'|'No'|null $NationalSecurity
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property string|null $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property Shapes\Project|null $Project
 * @property Shapes\SoftwareRevenue|null $SoftwareRevenue
 */
class UpdateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Customer?: Shapes\Customer|null,
     *     Identifier: string,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     LifeCycle?: Shapes\LifeCycle|null,
     *     Marketing?: Shapes\Marketing|null,
     *     NationalSecurity?: 'Yes'|'No'|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     PartnerOpportunityIdentifier?: string|null,
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null,
     *     Project?: Shapes\Project|null,
     *     SoftwareRevenue?: Shapes\SoftwareRevenue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
