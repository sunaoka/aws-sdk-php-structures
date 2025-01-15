<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Schedule
 * @property list<Action>|null $Actions
 * @property Predicate|null $Predicate
 * @property EventBatchingCondition|null $EventBatchingCondition
 */
class TriggerUpdate extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Schedule?: string|null,
     *     Actions?: list<Action>|null,
     *     Predicate?: Predicate|null,
     *     EventBatchingCondition?: EventBatchingCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
