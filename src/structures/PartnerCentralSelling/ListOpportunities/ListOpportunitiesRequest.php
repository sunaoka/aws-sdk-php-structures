<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $CustomerCompanyName
 * @property list<string> $Identifier
 * @property Shapes\LastModifiedDate $LastModifiedDate
 * @property list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'> $LifeCycleReviewStatus
 * @property list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'> $LifeCycleStage
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\OpportunitySort $Sort
 */
class ListOpportunitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CustomerCompanyName?: list<string>,
     *     Identifier?: list<string>,
     *     LastModifiedDate?: Shapes\LastModifiedDate,
     *     LifeCycleReviewStatus?: list<'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'>,
     *     LifeCycleStage?: list<'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Sort?: Shapes\OpportunitySort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
