<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property Shapes\AwsOpportunityCustomer|null $Customer
 * @property Shapes\AwsOpportunityInsights|null $Insights
 * @property 'For Visibility Only'|'Co-Sell'|null $InvolvementType
 * @property 'Expansion Opportunity'|'Change in Deal Information'|'Customer Requested'|'Technical Complexity'|'Risk Mitigation'|null $InvolvementTypeChangeReason
 * @property Shapes\AwsOpportunityLifeCycle|null $LifeCycle
 * @property list<Shapes\AwsTeamMember>|null $OpportunityTeam
 * @property 'AWS Referral'|'Partner Referral'|null $Origin
 * @property Shapes\AwsOpportunityProject|null $Project
 * @property Shapes\AwsOpportunityRelatedEntities|null $RelatedEntityIds
 * @property string|null $RelatedOpportunityId
 * @property 'Full'|'Limited'|null $Visibility
 */
class GetAwsOpportunitySummaryResponse extends Response
{
}
