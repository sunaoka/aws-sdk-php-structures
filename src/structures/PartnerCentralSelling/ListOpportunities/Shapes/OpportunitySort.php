<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LastModifiedDate'|'Identifier'|'CustomerCompanyName' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class OpportunitySort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'LastModifiedDate'|'Identifier'|'CustomerCompanyName',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
