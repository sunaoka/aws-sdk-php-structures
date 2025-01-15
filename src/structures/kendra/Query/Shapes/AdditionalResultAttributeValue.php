<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextWithHighlights|null $TextWithHighlightsValue
 */
class AdditionalResultAttributeValue extends Shape
{
    /**
     * @param array{TextWithHighlightsValue?: TextWithHighlights|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
