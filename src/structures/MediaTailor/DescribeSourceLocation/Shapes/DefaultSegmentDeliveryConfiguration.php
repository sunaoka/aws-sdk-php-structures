<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeSourceLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaseUrl
 */
class DefaultSegmentDeliveryConfiguration extends Shape
{
    /**
     * @param array{BaseUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
