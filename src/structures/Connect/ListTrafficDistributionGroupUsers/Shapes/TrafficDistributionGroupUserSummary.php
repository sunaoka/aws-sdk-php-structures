<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroupUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 */
class TrafficDistributionGroupUserSummary extends Shape
{
    /**
     * @param array{UserId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
