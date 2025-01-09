<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Provisioned
 */
class WebAppUnits extends Shape
{
    /**
     * @param array{Provisioned?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
