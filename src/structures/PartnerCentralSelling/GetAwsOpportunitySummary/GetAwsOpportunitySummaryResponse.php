<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property Shapes\AwsOpportunityCustomer $Customer
 * @property Shapes\AwsOpportunityInsights $Insights
 * @property 'For Visibility Only'|'Co-Sell' $InvolvementType
 * @property 'Expansion Opportunity'|'Change in Deal Information'|'Customer Requested'|'Technical Complexity'|'Risk Mitigation' $InvolvementTypeChangeReason
 * @property Shapes\AwsOpportunityLifeCycle $LifeCycle
 * @property list<Shapes\AwsTeamMember> $OpportunityTeam
 * @property 'AWS Referral'|'Partner Referral' $Origin
 * @property Shapes\AwsOpportunityProject $Project
 * @property Shapes\AwsOpportunityRelatedEntities $RelatedEntityIds
 * @property string $RelatedOpportunityId
 * @property 'Full'|'Limited' $Visibility
 */
class GetAwsOpportunitySummaryResponse extends Response
{
}
