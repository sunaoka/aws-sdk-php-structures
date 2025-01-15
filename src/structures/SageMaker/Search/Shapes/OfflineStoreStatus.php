<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'Blocked'|'Disabled' $Status
 * @property string|null $BlockedReason
 */
class OfflineStoreStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Active'|'Blocked'|'Disabled',
     *     BlockedReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
