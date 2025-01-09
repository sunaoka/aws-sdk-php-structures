<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CountryCode
 */
class HolidayConfigAttributes extends Shape
{
    /**
     * @param array{CountryCode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
