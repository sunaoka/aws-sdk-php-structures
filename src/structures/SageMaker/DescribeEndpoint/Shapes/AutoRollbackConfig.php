<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Alarm>|null $Alarms
 */
class AutoRollbackConfig extends Shape
{
    /**
     * @param array{Alarms?: list<Alarm>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
