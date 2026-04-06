<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE'|null $Relative
 */
class FontSize extends Shape
{
    /**
     * @param array{Relative?: 'EXTRA_SMALL'|'SMALL'|'MEDIUM'|'LARGE'|'EXTRA_LARGE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
