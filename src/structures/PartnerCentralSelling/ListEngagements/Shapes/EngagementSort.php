<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class EngagementSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'CreatedDate',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
