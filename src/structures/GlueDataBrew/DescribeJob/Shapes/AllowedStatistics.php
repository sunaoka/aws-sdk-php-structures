<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Statistics
 */
class AllowedStatistics extends Shape
{
    /**
     * @param array{Statistics: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
