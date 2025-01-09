<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Section> $sections
 */
class LayoutSections extends Shape
{
    /**
     * @param array{sections?: list<Section>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
