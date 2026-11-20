<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property string|null $PartnerOpportunityIdentifier
 * @property OpportunitySearchLifeCycle|null $LifeCycle
 * @property OpportunitySearchCustomer|null $Customer
 * @property OpportunitySearchProject|null $Project
 * @property list<Tag>|null $Tags
 * @property OpportunitySearchRelatedEntityIdentifiers|null $RelatedEntityIdentifiers
 * @property list<OpportunitySearchTeamMember>|null $OpportunityTeam
 * @property OpportunitySearchAwsSummary|null $AwsOpportunitySummary
 */
class OpportunitySearchSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     PartnerOpportunityIdentifier?: string|null,
     *     LifeCycle?: OpportunitySearchLifeCycle|null,
     *     Customer?: OpportunitySearchCustomer|null,
     *     Project?: OpportunitySearchProject|null,
     *     Tags?: list<Tag>|null,
     *     RelatedEntityIdentifiers?: OpportunitySearchRelatedEntityIdentifiers|null,
     *     OpportunityTeam?: list<OpportunitySearchTeamMember>|null,
     *     AwsOpportunitySummary?: OpportunitySearchAwsSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
