<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $OptInStatus
 */
class OpsCenterIntegration extends Shape
{
    /**
     * @param array{OptInStatus?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
