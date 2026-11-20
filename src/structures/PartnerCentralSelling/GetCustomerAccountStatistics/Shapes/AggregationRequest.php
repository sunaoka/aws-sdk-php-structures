<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ENRICHMENT_STATUS'|'AWS_INDUSTRY'|'SEGMENT'|'REGION'|'SOLUTION_CATEGORY'|'ACCOUNT_PLANNING_QUALIFICATION'|'PROGRAM_ELIGIBILITY'|'MARKETPLACE_ENGAGEMENT_SCORE'|'GEO'|'COUNTRY'|'SOLUTION_SCORE'> $GroupBy
 */
class AggregationRequest extends Shape
{
    /**
     * @param array{GroupBy: list<'ENRICHMENT_STATUS'|'AWS_INDUSTRY'|'SEGMENT'|'REGION'|'SOLUTION_CATEGORY'|'ACCOUNT_PLANNING_QUALIFICATION'|'PROGRAM_ELIGIBILITY'|'MARKETPLACE_ENGAGEMENT_SCORE'|'GEO'|'COUNTRY'|'SOLUTION_SCORE'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
