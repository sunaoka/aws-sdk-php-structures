<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $CustomerCompanyName
 * @property list<string>|null $Identifier
 * @property Shapes\LastModifiedDate|null $LastModifiedDate
 * @property list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'>|null $LifeCycleReviewStatus
 * @property list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'>|null $LifeCycleStage
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\OpportunitySort|null $Sort
 */
class ListOpportunitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CustomerCompanyName?: list<string>|null,
     *     Identifier?: list<string>|null,
     *     LastModifiedDate?: Shapes\LastModifiedDate|null,
     *     LifeCycleReviewStatus?: list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'>|null,
     *     LifeCycleStage?: list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\OpportunitySort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
