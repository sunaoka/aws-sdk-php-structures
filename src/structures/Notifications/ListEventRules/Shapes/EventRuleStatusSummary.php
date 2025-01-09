<?php

namespace Sunaoka\Aws\Structures\Notifications\ListEventRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE'|'CREATING'|'UPDATING'|'DELETING' $status
 * @property string $reason
 */
class EventRuleStatusSummary extends Shape
{
    /**
     * @param array{
     *     status: 'ACTIVE'|'INACTIVE'|'CREATING'|'UPDATING'|'DELETING',
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
