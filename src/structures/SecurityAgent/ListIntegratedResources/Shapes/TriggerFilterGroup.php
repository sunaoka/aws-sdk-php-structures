<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PULL_REQUEST_READY_FOR_REVIEW'|'PULL_REQUEST_DRAFT'|'PULL_REQUEST_LABEL_ADDED'>|null $events
 * @property list<TriggerFilter>|null $filters
 */
class TriggerFilterGroup extends Shape
{
    /**
     * @param array{
     *     events?: list<'PULL_REQUEST_READY_FOR_REVIEW'|'PULL_REQUEST_DRAFT'|'PULL_REQUEST_LABEL_ADDED'>|null,
     *     filters?: list<TriggerFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
