<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Types
 * @property list<string>|null $Identifiers
 */
class ImplementationFilter extends Shape
{
    /**
     * @param array{
     *     Types?: list<string>|null,
     *     Identifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
