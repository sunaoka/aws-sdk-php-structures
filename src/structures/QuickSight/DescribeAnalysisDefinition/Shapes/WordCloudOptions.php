<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HORIZONTAL'|'HORIZONTAL_AND_VERTICAL'|null $WordOrientation
 * @property 'EMPHASIZE'|'NORMAL'|null $WordScaling
 * @property 'FLUID'|'NORMAL'|null $CloudLayout
 * @property 'LOWER_CASE'|'EXISTING_CASE'|null $WordCasing
 * @property 'NONE'|'SMALL'|'MEDIUM'|'LARGE'|null $WordPadding
 * @property int<1, 100>|null $MaximumStringLength
 */
class WordCloudOptions extends Shape
{
    /**
     * @param array{
     *     WordOrientation?: 'HORIZONTAL'|'HORIZONTAL_AND_VERTICAL'|null,
     *     WordScaling?: 'EMPHASIZE'|'NORMAL'|null,
     *     CloudLayout?: 'FLUID'|'NORMAL'|null,
     *     WordCasing?: 'LOWER_CASE'|'EXISTING_CASE'|null,
     *     WordPadding?: 'NONE'|'SMALL'|'MEDIUM'|'LARGE'|null,
     *     MaximumStringLength?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
