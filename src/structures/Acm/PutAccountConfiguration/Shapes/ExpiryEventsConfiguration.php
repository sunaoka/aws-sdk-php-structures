<?php

namespace Sunaoka\Aws\Structures\Acm\PutAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DaysBeforeExpiry
 */
class ExpiryEventsConfiguration extends Shape
{
    /**
     * @param array{DaysBeforeExpiry?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
