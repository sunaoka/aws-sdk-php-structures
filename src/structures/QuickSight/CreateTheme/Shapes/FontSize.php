<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE'|null $Relative
 * @property string|null $Absolute
 */
class FontSize extends Shape
{
    /**
     * @param array{
     *     Relative?: 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE'|null,
     *     Absolute?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
