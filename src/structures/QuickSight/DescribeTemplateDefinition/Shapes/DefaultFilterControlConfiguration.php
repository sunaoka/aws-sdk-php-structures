<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property DefaultFilterControlOptions $ControlOptions
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class DefaultFilterControlConfiguration extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     ControlOptions: DefaultFilterControlOptions,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
