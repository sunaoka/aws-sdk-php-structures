<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Range|null $lineRange
 * @property Range|null $offsetRange
 * @property int|null $pageNumber
 */
class Page extends Shape
{
    /**
     * @param array{
     *     lineRange?: Range|null,
     *     offsetRange?: Range|null,
     *     pageNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
