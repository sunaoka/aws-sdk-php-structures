<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OpportunityId'|'Stage'|'ReviewStatus'|'CustomerCompanyName'|'LastModifiedDate'|'TargetCloseDate'|'CreatedDate'|'CountryCode'|'PartnerProjectTitle'|'OpportunityType'|'PartnerOpportunityIdentifier'|'Industry'|'AwsAccountId'|'Origin'|'NextStep'|'CosellMotion'|'OpportunityOwner'|'EngagementScore'|'EstimatedMrr'|'Tags'|'OfferId'|'OfferSetId'|'ApnPrograms' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class OpportunitySearchSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'OpportunityId'|'Stage'|'ReviewStatus'|'CustomerCompanyName'|'LastModifiedDate'|'TargetCloseDate'|'CreatedDate'|'CountryCode'|'PartnerProjectTitle'|'OpportunityType'|'PartnerOpportunityIdentifier'|'Industry'|'AwsAccountId'|'Origin'|'NextStep'|'CosellMotion'|'OpportunityOwner'|'EngagementScore'|'EstimatedMrr'|'Tags'|'OfferId'|'OfferSetId'|'ApnPrograms',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
