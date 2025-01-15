<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableBorderOptions|null $InnerVertical
 * @property TableBorderOptions|null $InnerHorizontal
 * @property TableBorderOptions|null $Left
 * @property TableBorderOptions|null $Right
 * @property TableBorderOptions|null $Top
 * @property TableBorderOptions|null $Bottom
 */
class TableSideBorderOptions extends Shape
{
    /**
     * @param array{
     *     InnerVertical?: TableBorderOptions|null,
     *     InnerHorizontal?: TableBorderOptions|null,
     *     Left?: TableBorderOptions|null,
     *     Right?: TableBorderOptions|null,
     *     Top?: TableBorderOptions|null,
     *     Bottom?: TableBorderOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
