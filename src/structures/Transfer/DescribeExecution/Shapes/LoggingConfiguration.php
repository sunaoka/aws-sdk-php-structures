<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoggingRole
 * @property string $LogGroupName
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     LoggingRole?: string,
     *     LogGroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
