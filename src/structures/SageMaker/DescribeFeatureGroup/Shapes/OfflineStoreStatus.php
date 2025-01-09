<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'Blocked'|'Disabled' $Status
 * @property string $BlockedReason
 */
class OfflineStoreStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Active'|'Blocked'|'Disabled',
     *     BlockedReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
