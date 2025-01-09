<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ProcessingTimeMilliseconds
 */
class TimingInformation extends Shape
{
    /**
     * @param array{ProcessingTimeMilliseconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
