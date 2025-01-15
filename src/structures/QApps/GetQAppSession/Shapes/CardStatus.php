<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR' $currentState
 * @property string $currentValue
 * @property list<Submission>|null $submissions
 */
class CardStatus extends Shape
{
    /**
     * @param array{
     *     currentState: 'IN_PROGRESS'|'WAITING'|'COMPLETED'|'ERROR',
     *     currentValue: string,
     *     submissions?: list<Submission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
