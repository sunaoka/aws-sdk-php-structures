<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextWithHighlights $TextWithHighlightsValue
 */
class AdditionalResultAttributeValue extends Shape
{
    /**
     * @param array{TextWithHighlightsValue?: TextWithHighlights} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
