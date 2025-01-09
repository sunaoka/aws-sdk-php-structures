<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotJobResultFileGroup> $FileGroups
 */
class AnonymousUserSnapshotJobResult extends Shape
{
    /**
     * @param array{FileGroups?: list<SnapshotJobResultFileGroup>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
