<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnonymousUserSnapshotJobResult>|null $AnonymousUsers
 * @property list<RegisteredUserSnapshotJobResult>|null $RegisteredUsers
 */
class SnapshotJobResult extends Shape
{
    /**
     * @param array{
     *     AnonymousUsers?: list<AnonymousUserSnapshotJobResult>|null,
     *     RegisteredUsers?: list<RegisteredUserSnapshotJobResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
