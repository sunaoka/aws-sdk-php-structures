<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ICON_ONLY' $IconDisplayOption
 */
class ConditionalFormattingIconDisplayConfiguration extends Shape
{
    /**
     * @param array{IconDisplayOption?: 'ICON_ONLY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
