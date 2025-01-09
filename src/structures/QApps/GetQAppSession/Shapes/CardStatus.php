<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR' $currentState
 * @property string $currentValue
 * @property list<Submission> $submissions
 */
class CardStatus extends Shape
{
    /**
     * @param array{
     *     currentState: 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR',
     *     currentValue: string,
     *     submissions?: list<Submission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
