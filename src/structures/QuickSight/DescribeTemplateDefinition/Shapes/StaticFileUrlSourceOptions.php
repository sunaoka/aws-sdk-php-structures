<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 */
class StaticFileUrlSourceOptions extends Shape
{
    /**
     * @param array{Url: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
