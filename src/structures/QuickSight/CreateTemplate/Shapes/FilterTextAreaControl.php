<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property string $Delimiter
 * @property TextAreaControlDisplayOptions $DisplayOptions
 */
class FilterTextAreaControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     Delimiter?: string,
     *     DisplayOptions?: TextAreaControlDisplayOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
