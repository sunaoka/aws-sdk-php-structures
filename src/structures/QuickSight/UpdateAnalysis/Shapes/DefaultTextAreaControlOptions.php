<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 * @property TextAreaControlDisplayOptions $DisplayOptions
 */
class DefaultTextAreaControlOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string,
     *     DisplayOptions?: TextAreaControlDisplayOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
