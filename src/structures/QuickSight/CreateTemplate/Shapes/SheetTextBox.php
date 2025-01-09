<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetTextBoxId
 * @property string $Content
 */
class SheetTextBox extends Shape
{
    /**
     * @param array{
     *     SheetTextBoxId: string,
     *     Content?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
