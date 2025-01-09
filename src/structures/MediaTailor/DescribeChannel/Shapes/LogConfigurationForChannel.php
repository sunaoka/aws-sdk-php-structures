<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AS_RUN'> $LogTypes
 */
class LogConfigurationForChannel extends Shape
{
    /**
     * @param array{LogTypes?: list<'AS_RUN'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
