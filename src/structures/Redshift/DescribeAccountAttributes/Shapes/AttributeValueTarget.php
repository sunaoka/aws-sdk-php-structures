<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeValue
 */
class AttributeValueTarget extends Shape
{
    /**
     * @param array{AttributeValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
