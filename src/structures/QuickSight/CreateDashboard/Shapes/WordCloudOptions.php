<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HORIZONTAL'|'HORIZONTAL_AND_VERTICAL' $WordOrientation
 * @property 'EMPHASIZE'|'NORMAL' $WordScaling
 * @property 'FLUID'|'NORMAL' $CloudLayout
 * @property 'LOWER_CASE'|'EXISTING_CASE' $WordCasing
 * @property 'NONE'|'SMALL'|'MEDIUM'|'LARGE' $WordPadding
 * @property int<1, 100> $MaximumStringLength
 */
class WordCloudOptions extends Shape
{
    /**
     * @param array{
     *     WordOrientation?: 'HORIZONTAL'|'HORIZONTAL_AND_VERTICAL',
     *     WordScaling?: 'EMPHASIZE'|'NORMAL',
     *     CloudLayout?: 'FLUID'|'NORMAL',
     *     WordCasing?: 'LOWER_CASE'|'EXISTING_CASE',
     *     WordPadding?: 'NONE'|'SMALL'|'MEDIUM'|'LARGE',
     *     MaximumStringLength?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
