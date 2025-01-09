<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\Customer $Customer
 * @property string $Identifier
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property Shapes\LifeCycle $LifeCycle
 * @property Shapes\Marketing $Marketing
 * @property 'Yes'|'No' $NationalSecurity
 * @property 'Net New Business'|'Flat Renewal'|'Expansion' $OpportunityType
 * @property string $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'> $PrimaryNeedsFromAws
 * @property Shapes\Project $Project
 * @property Shapes\SoftwareRevenue $SoftwareRevenue
 */
class UpdateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Customer?: Shapes\Customer,
     *     Identifier: string,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     LifeCycle?: Shapes\LifeCycle,
     *     Marketing?: Shapes\Marketing,
     *     NationalSecurity?: 'Yes'|'No',
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion',
     *     PartnerOpportunityIdentifier?: string,
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>,
     *     Project?: Shapes\Project,
     *     SoftwareRevenue?: Shapes\SoftwareRevenue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
