<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableBorderOptions $InnerVertical
 * @property TableBorderOptions $InnerHorizontal
 * @property TableBorderOptions $Left
 * @property TableBorderOptions $Right
 * @property TableBorderOptions $Top
 * @property TableBorderOptions $Bottom
 */
class TableSideBorderOptions extends Shape
{
    /**
     * @param array{
     *     InnerVertical?: TableBorderOptions,
     *     InnerHorizontal?: TableBorderOptions,
     *     Left?: TableBorderOptions,
     *     Right?: TableBorderOptions,
     *     Top?: TableBorderOptions,
     *     Bottom?: TableBorderOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
