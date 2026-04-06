<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property Shapes\Customer|null $Customer
 * @property Shapes\LifeCycle|null $LifeCycle
 * @property Shapes\Marketing|null $Marketing
 * @property 'Yes'|'No'|null $NationalSecurity
 * @property list<Shapes\Contact>|null $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property 'AWS Referral'|'Partner Referral'|null $Origin
 * @property string|null $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property Shapes\Project|null $Project
 * @property Shapes\SoftwareRevenue|null $SoftwareRevenue
 */
class CreateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Customer?: Shapes\Customer|null,
     *     LifeCycle?: Shapes\LifeCycle|null,
     *     Marketing?: Shapes\Marketing|null,
     *     NationalSecurity?: 'Yes'|'No'|null,
     *     OpportunityTeam?: list<Shapes\Contact>|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     Origin?: 'AWS Referral'|'Partner Referral'|null,
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
