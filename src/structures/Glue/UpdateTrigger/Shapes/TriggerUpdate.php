<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Schedule
 * @property list<Action> $Actions
 * @property Predicate $Predicate
 * @property EventBatchingCondition $EventBatchingCondition
 */
class TriggerUpdate extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Schedule?: string,
     *     Actions?: list<Action>,
     *     Predicate?: Predicate,
     *     EventBatchingCondition?: EventBatchingCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
