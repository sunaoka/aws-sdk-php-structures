<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'InSync'|'Inconsistent'|null $State
 * @property string|null $StateReason
 * @property string|null $StateReasonCode
 */
class ReplicationStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'InProgress'|'InSync'|'Inconsistent'|null,
     *     StateReason?: string|null,
     *     StateReasonCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
