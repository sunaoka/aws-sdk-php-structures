<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSelfUpgradeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO_APPROVAL'|'ADMIN_APPROVAL'|null $SelfUpgradeStatus
 */
class SelfUpgradeConfiguration extends Shape
{
    /**
     * @param array{SelfUpgradeStatus?: 'AUTO_APPROVAL'|'ADMIN_APPROVAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
