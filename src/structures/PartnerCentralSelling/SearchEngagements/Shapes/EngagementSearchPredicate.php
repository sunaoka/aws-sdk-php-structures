<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EngagementId'|'Title'|'PartnerId'|'CreatedAt'|'LastModifiedAt'|'MemberCount'|'ProspectingCustomerGeo'|'ProspectingCustomerRegion'|'ProspectingCustomerIndustry'|'ProspectingCustomerSegment'|'ProspectingCustomerCountry'|'ProspectingCustomerCompanySize'|'ProspectingInsightsMarketplaceEngagementScore'|'ProspectingInsightsSolutionCategory'|'ProspectingInsightsSolutionSubCategory'|'LeadQualificationStatus'|'LeadReadinessScore'|'LeadCustomerIndustry'|'LeadCustomerCountryCode'|'LeadCustomerAwsMaturity'|'LeadCustomerMarketSegment'|'LeadInteractionsSourceType'|'LeadCustomerCompanyName'|'LeadInteractionsContactFirstName'|'LeadInteractionsContactLastName'|'LeadInteractionsUsecase'|'LeadInteractionsSourceName'|'LeadInteractionsContactBusinessTitle'|'ContextType' $Key
 * @property EngagementSearchFilterValue $Value
 */
class EngagementSearchPredicate extends Shape
{
    /**
     * @param array{
     *     Key: 'EngagementId'|'Title'|'PartnerId'|'CreatedAt'|'LastModifiedAt'|'MemberCount'|'ProspectingCustomerGeo'|'ProspectingCustomerRegion'|'ProspectingCustomerIndustry'|'ProspectingCustomerSegment'|'ProspectingCustomerCountry'|'ProspectingCustomerCompanySize'|'ProspectingInsightsMarketplaceEngagementScore'|'ProspectingInsightsSolutionCategory'|'ProspectingInsightsSolutionSubCategory'|'LeadQualificationStatus'|'LeadReadinessScore'|'LeadCustomerIndustry'|'LeadCustomerCountryCode'|'LeadCustomerAwsMaturity'|'LeadCustomerMarketSegment'|'LeadInteractionsSourceType'|'LeadCustomerCompanyName'|'LeadInteractionsContactFirstName'|'LeadInteractionsContactLastName'|'LeadInteractionsUsecase'|'LeadInteractionsSourceName'|'LeadInteractionsContactBusinessTitle'|'ContextType',
     *     Value: EngagementSearchFilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
