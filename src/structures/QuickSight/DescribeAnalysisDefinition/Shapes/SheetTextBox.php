<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetTextBoxId
 * @property string|null $Content
 */
class SheetTextBox extends Shape
{
    /**
     * @param array{
     *     SheetTextBoxId: string,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
