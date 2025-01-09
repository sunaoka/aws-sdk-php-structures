<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PageNumber
 * @property Range $LineRange
 * @property Range $OffsetRange
 */
class Page extends Shape
{
    /**
     * @param array{
     *     PageNumber?: int,
     *     LineRange?: Range,
     *     OffsetRange?: Range
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
