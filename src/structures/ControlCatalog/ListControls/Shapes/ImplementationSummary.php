<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string|null $Identifier
 */
class ImplementationSummary extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Identifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
