<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SheetId
 * @property string|null $Name
 */
class Sheet extends Shape
{
    /**
     * @param array{
     *     SheetId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
