<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RowLevelPermissionTagKeys
 */
class SnapshotAnonymousUserRedacted extends Shape
{
    /**
     * @param array{RowLevelPermissionTagKeys?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
