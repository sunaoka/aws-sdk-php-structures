<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataTableAccessControlConfiguration|null $DataTableAccessControlConfiguration
 */
class GranularAccessControlConfiguration extends Shape
{
    /**
     * @param array{DataTableAccessControlConfiguration?: DataTableAccessControlConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
