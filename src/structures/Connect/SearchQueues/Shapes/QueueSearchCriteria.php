<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueueSearchCriteria>|null $OrConditions
 * @property list<QueueSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property 'STANDARD'|null $QueueTypeCondition
 */
class QueueSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<QueueSearchCriteria>|null,
     *     AndConditions?: list<QueueSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     QueueTypeCondition?: 'STANDARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
