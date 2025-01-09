<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogAnomalyClass> $LogAnomalyClasses
 */
class LogAnomalyShowcase extends Shape
{
    /**
     * @param array{LogAnomalyClasses?: list<LogAnomalyClass>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
