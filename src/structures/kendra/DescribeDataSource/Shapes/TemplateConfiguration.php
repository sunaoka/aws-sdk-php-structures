<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Template|null $Template
 */
class TemplateConfiguration extends Shape
{
    /**
     * @param array{Template?: Template|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
