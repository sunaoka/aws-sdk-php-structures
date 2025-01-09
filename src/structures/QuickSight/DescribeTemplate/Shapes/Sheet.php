<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property string $Name
 * @property list<SheetImage> $Images
 */
class Sheet extends Shape
{
    /**
     * @param array{
     *     SheetId?: string,
     *     Name?: string,
     *     Images?: list<SheetImage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
