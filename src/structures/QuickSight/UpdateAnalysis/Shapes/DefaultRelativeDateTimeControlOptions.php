<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelativeDateTimeControlDisplayOptions $DisplayOptions
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class DefaultRelativeDateTimeControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: RelativeDateTimeControlDisplayOptions,
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
