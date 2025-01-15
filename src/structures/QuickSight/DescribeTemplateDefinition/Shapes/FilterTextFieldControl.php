<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property TextFieldControlDisplayOptions|null $DisplayOptions
 */
class FilterTextFieldControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: TextFieldControlDisplayOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
