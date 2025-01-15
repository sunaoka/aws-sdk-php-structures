<?php

namespace Sunaoka\Aws\Structures\Acm\GetAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $DaysBeforeExpiry
 */
class ExpiryEventsConfiguration extends Shape
{
    /**
     * @param array{DaysBeforeExpiry?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
