<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlainText
 * @property string $RichText
 */
class ShortFormatText extends Shape
{
    /**
     * @param array{
     *     PlainText?: string,
     *     RichText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
