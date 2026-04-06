<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'CreatedDate' $SortBy
 */
class EngagementSort extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'CreatedDate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
