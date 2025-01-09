<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Alarm> $Alarms
 */
class AutoRollbackConfig extends Shape
{
    /**
     * @param array{Alarms?: list<Alarm>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
