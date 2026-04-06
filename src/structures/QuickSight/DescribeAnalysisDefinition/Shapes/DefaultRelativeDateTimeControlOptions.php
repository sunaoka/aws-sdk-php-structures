<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelativeDateTimeControlDisplayOptions|null $DisplayOptions
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class DefaultRelativeDateTimeControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: RelativeDateTimeControlDisplayOptions|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
