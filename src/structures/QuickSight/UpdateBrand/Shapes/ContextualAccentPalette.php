<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Palette|null $Connection
 * @property Palette|null $Visualization
 * @property Palette|null $Insight
 * @property Palette|null $Automation
 */
class ContextualAccentPalette extends Shape
{
    /**
     * @param array{
     *     Connection?: Palette|null,
     *     Visualization?: Palette|null,
     *     Insight?: Palette|null,
     *     Automation?: Palette|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
