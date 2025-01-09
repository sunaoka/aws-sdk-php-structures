<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED' $Status
 */
class WorkflowUpdate extends Shape
{
    /**
     * @param array{Status?: 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
