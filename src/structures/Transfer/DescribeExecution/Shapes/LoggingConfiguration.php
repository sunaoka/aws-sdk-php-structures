<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoggingRole
 * @property string|null $LogGroupName
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     LoggingRole?: string|null,
     *     LogGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
