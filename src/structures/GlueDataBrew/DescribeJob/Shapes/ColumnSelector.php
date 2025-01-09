<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Regex
 * @property string $Name
 */
class ColumnSelector extends Shape
{
    /**
     * @param array{
     *     Regex?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
