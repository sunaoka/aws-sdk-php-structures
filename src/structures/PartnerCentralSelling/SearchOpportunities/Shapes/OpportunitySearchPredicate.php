<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OpportunityId'|'Stage'|'ReviewStatus'|'CustomerCompanyName'|'LastModifiedDate'|'TargetCloseDate'|'CreatedDate'|'CountryCode'|'PartnerProjectTitle'|'OpportunityType'|'PartnerOpportunityIdentifier'|'Industry'|'AwsAccountId'|'ApnPrograms'|'Origin'|'Tags'|'NextStep'|'OfferId'|'OfferSetId'|'AwsMarketplaceSolution'|'CosellMotion'|'OpportunityOwner'|'EstimatedMrr'|'EngagementScore' $Key
 * @property OpportunitySearchFilterValue $Value
 */
class OpportunitySearchPredicate extends Shape
{
    /**
     * @param array{
     *     Key: 'OpportunityId'|'Stage'|'ReviewStatus'|'CustomerCompanyName'|'LastModifiedDate'|'TargetCloseDate'|'CreatedDate'|'CountryCode'|'PartnerProjectTitle'|'OpportunityType'|'PartnerOpportunityIdentifier'|'Industry'|'AwsAccountId'|'ApnPrograms'|'Origin'|'Tags'|'NextStep'|'OfferId'|'OfferSetId'|'AwsMarketplaceSolution'|'CosellMotion'|'OpportunityOwner'|'EstimatedMrr'|'EngagementScore',
     *     Value: OpportunitySearchFilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
