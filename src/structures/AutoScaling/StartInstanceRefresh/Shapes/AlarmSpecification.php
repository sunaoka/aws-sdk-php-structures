<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Alarms
 */
class AlarmSpecification extends Shape
{
    /**
     * @param array{Alarms?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
