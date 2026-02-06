<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RelatedOpportunityId
 * @property 'AWS Referral'|'Partner Referral'|null $Origin
 * @property 'For Visibility Only'|'Co-Sell'|null $InvolvementType
 * @property 'Full'|'Limited'|null $Visibility
 * @property AwsOpportunityLifeCycle|null $LifeCycle
 * @property list<AwsTeamMember>|null $OpportunityTeam
 * @property AwsOpportunityInsights|null $Insights
 * @property 'Expansion Opportunity'|'Change in Deal Information'|'Customer Requested'|'Technical Complexity'|'Risk Mitigation'|null $InvolvementTypeChangeReason
 * @property AwsOpportunityRelatedEntities|null $RelatedEntityIds
 * @property AwsOpportunityCustomer|null $Customer
 * @property AwsOpportunityProject|null $Project
 */
class AwsOpportunitySummaryFullView extends Shape
{
    /**
     * @param array{
     *     RelatedOpportunityId?: string|null,
     *     Origin?: 'AWS Referral'|'Partner Referral'|null,
     *     InvolvementType?: 'For Visibility Only'|'Co-Sell'|null,
     *     Visibility?: 'Full'|'Limited'|null,
     *     LifeCycle?: AwsOpportunityLifeCycle|null,
     *     OpportunityTeam?: list<AwsTeamMember>|null,
     *     Insights?: AwsOpportunityInsights|null,
     *     InvolvementTypeChangeReason?: 'Expansion Opportunity'|'Change in Deal Information'|'Customer Requested'|'Technical Complexity'|'Risk Mitigation'|null,
     *     RelatedEntityIds?: AwsOpportunityRelatedEntities|null,
     *     Customer?: AwsOpportunityCustomer|null,
     *     Project?: AwsOpportunityProject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
