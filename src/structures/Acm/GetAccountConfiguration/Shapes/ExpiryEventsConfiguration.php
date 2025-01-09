<?php

namespace Sunaoka\Aws\Structures\Acm\GetAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $DaysBeforeExpiry
 */
class ExpiryEventsConfiguration extends Shape
{
    /**
     * @param array{DaysBeforeExpiry?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
