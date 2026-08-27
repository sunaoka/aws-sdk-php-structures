<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PULL_REQUEST_READY_FOR_REVIEW'|'PULL_REQUEST_DRAFT'>|null $events
 * @property PatternFilter|null $targetBranches
 */
class TriggerFilterGroup extends Shape
{
    /**
     * @param array{
     *     events?: list<'PULL_REQUEST_READY_FOR_REVIEW'|'PULL_REQUEST_DRAFT'>|null,
     *     targetBranches?: PatternFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
