<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 */
class Endpoint extends Shape
{
    /**
     * @param array{Url?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
