<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDisableStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_AVAILABLE_CONFIGURATION_RECORDER'|'INTERNAL_ERROR' $StatusReasonCode
 */
class StandardsStatusReason extends Shape
{
    /**
     * @param array{StatusReasonCode: 'NO_AVAILABLE_CONFIGURATION_RECORDER'|'INTERNAL_ERROR'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
