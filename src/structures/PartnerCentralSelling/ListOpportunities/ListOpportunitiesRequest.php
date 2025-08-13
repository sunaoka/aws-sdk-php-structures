<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\OpportunitySort|null $Sort
 * @property Shapes\LastModifiedDate|null $LastModifiedDate
 * @property list<string>|null $Identifier
 * @property list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'>|null $LifeCycleStage
 * @property list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'>|null $LifeCycleReviewStatus
 * @property list<string>|null $CustomerCompanyName
 */
class ListOpportunitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\OpportunitySort|null,
     *     LastModifiedDate?: Shapes\LastModifiedDate|null,
     *     Identifier?: list<string>|null,
     *     LifeCycleStage?: list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'>|null,
     *     LifeCycleReviewStatus?: list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'>|null,
     *     CustomerCompanyName?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
