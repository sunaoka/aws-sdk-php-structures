<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PageNumber
 * @property Range|null $LineRange
 * @property Range|null $OffsetRange
 */
class Page extends Shape
{
    /**
     * @param array{
     *     PageNumber?: int|null,
     *     LineRange?: Range|null,
     *     OffsetRange?: Range|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
