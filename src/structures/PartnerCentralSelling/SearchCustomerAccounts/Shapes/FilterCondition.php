<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENRICHMENT_STATUS'|'COMPANY_NAME'|'AWS_INDUSTRY'|'ACCOUNT_PLANNING_QUALIFICATION'|'PROGRAM_ELIGIBILITY'|'IMPORT_ID'|'CREATED_DATE'|'LAST_MODIFIED_DATE'|'GEO'|'COUNTRY'|'SEGMENT'|'SOLUTION_CATEGORY'|'MARKETPLACE_ENGAGEMENT_SCORE'|'SOLUTION_SCORE' $Key
 * @property FilterValue $Value
 */
class FilterCondition extends Shape
{
    /**
     * @param array{
     *     Key: 'ENRICHMENT_STATUS'|'COMPANY_NAME'|'AWS_INDUSTRY'|'ACCOUNT_PLANNING_QUALIFICATION'|'PROGRAM_ELIGIBILITY'|'IMPORT_ID'|'CREATED_DATE'|'LAST_MODIFIED_DATE'|'GEO'|'COUNTRY'|'SEGMENT'|'SOLUTION_CATEGORY'|'MARKETPLACE_ENGAGEMENT_SCORE'|'SOLUTION_SCORE',
     *     Value: FilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
