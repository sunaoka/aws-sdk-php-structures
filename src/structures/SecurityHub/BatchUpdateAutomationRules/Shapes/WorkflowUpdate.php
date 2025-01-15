<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED'|null $Status
 */
class WorkflowUpdate extends Shape
{
    /**
     * @param array{Status?: 'NEW'|'NOTIFIED'|'RESOLVED'|'SUPPRESSED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
