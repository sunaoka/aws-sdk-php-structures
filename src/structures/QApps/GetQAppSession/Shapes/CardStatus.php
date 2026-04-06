<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'WAITING'|'COMPLETED' $currentState
 * @property string $currentValue
 */
class CardStatus extends Shape
{
    /**
     * @param array{
     *     currentState: 'IN_PROGRESS'|'WAITING'|'COMPLETED',
     *     currentValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
