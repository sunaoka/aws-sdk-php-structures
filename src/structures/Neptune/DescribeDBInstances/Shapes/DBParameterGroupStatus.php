<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBParameterGroupName
 * @property string $ParameterApplyStatus
 */
class DBParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupName?: string,
     *     ParameterApplyStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
