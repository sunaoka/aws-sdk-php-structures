<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RowLevelPermissionTagKeys
 */
class SnapshotAnonymousUserRedacted extends Shape
{
    /**
     * @param array{RowLevelPermissionTagKeys?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
