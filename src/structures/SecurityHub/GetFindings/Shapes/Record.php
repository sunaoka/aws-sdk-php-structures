<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JsonPath
 * @property int|null $RecordIndex
 */
class Record extends Shape
{
    /**
     * @param array{
     *     JsonPath?: string|null,
     *     RecordIndex?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
