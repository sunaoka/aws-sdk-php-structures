<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ICON_ONLY'|null $IconDisplayOption
 */
class ConditionalFormattingIconDisplayConfiguration extends Shape
{
    /**
     * @param array{IconDisplayOption?: 'ICON_ONLY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
