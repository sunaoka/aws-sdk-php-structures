<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueueSearchCriteria> $OrConditions
 * @property list<QueueSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 * @property 'STANDARD' $QueueTypeCondition
 */
class QueueSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<QueueSearchCriteria>,
     *     AndConditions?: list<QueueSearchCriteria>,
     *     StringCondition?: StringCondition,
     *     QueueTypeCondition?: 'STANDARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
