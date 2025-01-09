<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE' $Relative
 * @property string $Absolute
 */
class FontSize extends Shape
{
    /**
     * @param array{
     *     Relative?: 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE',
     *     Absolute?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
