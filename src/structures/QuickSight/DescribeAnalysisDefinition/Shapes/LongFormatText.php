<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlainText
 * @property string|null $RichText
 */
class LongFormatText extends Shape
{
    /**
     * @param array{
     *     PlainText?: string|null,
     *     RichText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
