<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LedgerName
 */
class StartSessionRequest extends Shape
{
    /**
     * @param array{LedgerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
