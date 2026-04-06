<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetTextBoxId
 * @property string|null $Content
 * @property TextBoxInteractionOptions|null $Interactions
 */
class SheetTextBox extends Shape
{
    /**
     * @param array{
     *     SheetTextBoxId: string,
     *     Content?: string|null,
     *     Interactions?: TextBoxInteractionOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
