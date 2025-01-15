<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotJobResultFileGroup>|null $FileGroups
 */
class AnonymousUserSnapshotJobResult extends Shape
{
    /**
     * @param array{FileGroups?: list<SnapshotJobResultFileGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
