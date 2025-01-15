<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroupUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 */
class TrafficDistributionGroupUserSummary extends Shape
{
    /**
     * @param array{UserId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
