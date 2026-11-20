<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPANY_NAME'|'CREATED_DATE'|'LAST_MODIFIED_DATE'|'MARKETPLACE_ENGAGEMENT_SCORE'|'SOLUTION_SCORE' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class CustomerAccountSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'COMPANY_NAME'|'CREATED_DATE'|'LAST_MODIFIED_DATE'|'MARKETPLACE_ENGAGEMENT_SCORE'|'SOLUTION_SCORE',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
