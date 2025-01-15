<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Section>|null $sections
 */
class LayoutSections extends Shape
{
    /**
     * @param array{sections?: list<Section>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
