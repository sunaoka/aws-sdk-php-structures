<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotAnonymousUserRedacted> $AnonymousUsers
 */
class SnapshotUserConfigurationRedacted extends Shape
{
    /**
     * @param array{AnonymousUsers?: list<SnapshotAnonymousUserRedacted>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
