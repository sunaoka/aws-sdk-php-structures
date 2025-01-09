<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JsonPath
 * @property int $RecordIndex
 */
class Record extends Shape
{
    /**
     * @param array{
     *     JsonPath?: string,
     *     RecordIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
