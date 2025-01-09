<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldTypeDetails $v1
 */
class SupportedFieldTypeDetails extends Shape
{
    /**
     * @param array{v1: FieldTypeDetails} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
