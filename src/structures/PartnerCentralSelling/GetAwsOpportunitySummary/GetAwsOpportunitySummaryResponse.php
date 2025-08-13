<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string|null $RelatedOpportunityId
 * @property 'AWS Referral'|'Partner Referral'|null $Origin
 * @property 'For Visibility Only'|'Co-Sell'|null $InvolvementType
 * @property 'Full'|'Limited'|null $Visibility
 * @property Shapes\AwsOpportunityLifeCycle|null $LifeCycle
 * @property list<Shapes\AwsTeamMember>|null $OpportunityTeam
 * @property Shapes\AwsOpportunityInsights|null $Insights
 * @property 'Expansion Opportunity'|'Change in Deal Information'|'Customer Requested'|'Technical Complexity'|'Risk Mitigation'|null $InvolvementTypeChangeReason
 * @property Shapes\AwsOpportunityRelatedEntities|null $RelatedEntityIds
 * @property Shapes\AwsOpportunityCustomer|null $Customer
 * @property Shapes\AwsOpportunityProject|null $Project
 */
class GetAwsOpportunitySummaryResponse extends Response
{
}
