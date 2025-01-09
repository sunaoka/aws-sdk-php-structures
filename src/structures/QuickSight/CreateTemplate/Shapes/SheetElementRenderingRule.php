<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property SheetElementConfigurationOverrides $ConfigurationOverrides
 */
class SheetElementRenderingRule extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     ConfigurationOverrides: SheetElementConfigurationOverrides
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
