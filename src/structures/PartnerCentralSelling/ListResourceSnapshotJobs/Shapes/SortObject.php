<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class SortObject extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'CreatedDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
