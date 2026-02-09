<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'LastModifiedDate'|'Identifier'|'CustomerCompanyName'|'CreatedDate' $SortBy
 */
class OpportunitySort extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'LastModifiedDate'|'Identifier'|'CustomerCompanyName'|'CreatedDate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
