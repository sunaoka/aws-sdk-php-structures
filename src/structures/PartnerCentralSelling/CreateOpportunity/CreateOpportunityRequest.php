<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property Shapes\Customer $Customer
 * @property Shapes\LifeCycle $LifeCycle
 * @property Shapes\Marketing $Marketing
 * @property 'Yes'|'No' $NationalSecurity
 * @property list<Shapes\Contact> $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion' $OpportunityType
 * @property 'AWS Referral'|'Partner Referral' $Origin
 * @property string $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'> $PrimaryNeedsFromAws
 * @property Shapes\Project $Project
 * @property Shapes\SoftwareRevenue $SoftwareRevenue
 */
class CreateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Customer?: Shapes\Customer,
     *     LifeCycle?: Shapes\LifeCycle,
     *     Marketing?: Shapes\Marketing,
     *     NationalSecurity?: 'Yes'|'No',
     *     OpportunityTeam?: list<Shapes\Contact>,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion',
     *     Origin?: 'AWS Referral'|'Partner Referral',
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
