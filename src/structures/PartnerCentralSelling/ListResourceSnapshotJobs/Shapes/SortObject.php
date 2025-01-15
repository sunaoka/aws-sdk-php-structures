<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class SortObject extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'CreatedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
