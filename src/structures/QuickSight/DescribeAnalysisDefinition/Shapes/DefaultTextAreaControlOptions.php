<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Delimiter
 * @property TextAreaControlDisplayOptions|null $DisplayOptions
 */
class DefaultTextAreaControlOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string|null,
     *     DisplayOptions?: TextAreaControlDisplayOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
