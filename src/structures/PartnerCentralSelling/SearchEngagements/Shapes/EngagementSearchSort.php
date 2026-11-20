<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EngagementId'|'Title'|'PartnerId'|'CreatedAt'|'LastModifiedAt'|'MemberCount'|'ProspectingCustomerGeo'|'ProspectingCustomerRegion'|'ProspectingCustomerIndustry'|'ProspectingCustomerSegment'|'ProspectingCustomerCountry'|'ProspectingCustomerCompanySize'|'ProspectingInsightsMarketplaceEngagementScore'|'ProspectingInsightsSolutionCategory'|'ProspectingInsightsSolutionSubCategory'|'LeadQualificationStatus'|'LeadReadinessScore'|'LeadCustomerIndustry'|'LeadCustomerCountryCode'|'LeadCustomerAwsMaturity'|'LeadCustomerMarketSegment'|'LeadCustomerCompanyName'|'LeadInteractionsContactFirstName'|'LeadInteractionsContactLastName'|'LeadInteractionsUsecase'|'LeadInteractionsContactBusinessTitle' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class EngagementSearchSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'EngagementId'|'Title'|'PartnerId'|'CreatedAt'|'LastModifiedAt'|'MemberCount'|'ProspectingCustomerGeo'|'ProspectingCustomerRegion'|'ProspectingCustomerIndustry'|'ProspectingCustomerSegment'|'ProspectingCustomerCountry'|'ProspectingCustomerCompanySize'|'ProspectingInsightsMarketplaceEngagementScore'|'ProspectingInsightsSolutionCategory'|'ProspectingInsightsSolutionSubCategory'|'LeadQualificationStatus'|'LeadReadinessScore'|'LeadCustomerIndustry'|'LeadCustomerCountryCode'|'LeadCustomerAwsMaturity'|'LeadCustomerMarketSegment'|'LeadCustomerCompanyName'|'LeadInteractionsContactFirstName'|'LeadInteractionsContactLastName'|'LeadInteractionsUsecase'|'LeadInteractionsContactBusinessTitle',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
