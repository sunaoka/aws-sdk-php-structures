<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelativeDateTimeControlDisplayOptions|null $DisplayOptions
 */
class DefaultRelativeDateTimeControlOptions extends Shape
{
    /**
     * @param array{DisplayOptions?: RelativeDateTimeControlDisplayOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
