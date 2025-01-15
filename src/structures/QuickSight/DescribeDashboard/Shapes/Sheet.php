<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SheetId
 * @property string|null $Name
 * @property list<SheetImage>|null $Images
 */
class Sheet extends Shape
{
    /**
     * @param array{
     *     SheetId?: string|null,
     *     Name?: string|null,
     *     Images?: list<SheetImage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
