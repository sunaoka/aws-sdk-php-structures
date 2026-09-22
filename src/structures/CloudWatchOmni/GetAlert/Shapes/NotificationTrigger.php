<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'OK'|'WARNING'|'CRITICAL'|'NODATA'>|null $stateValues
 */
class NotificationTrigger extends Shape
{
    /**
     * @param array{stateValues?: list<'OK'|'WARNING'|'CRITICAL'|'NODATA'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
