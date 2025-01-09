<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnonymousUserSnapshotJobResult> $AnonymousUsers
 */
class SnapshotJobResult extends Shape
{
    /**
     * @param array{AnonymousUsers?: list<AnonymousUserSnapshotJobResult>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
