<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $length
 * @property string|null $name
 * @property int $offset
 */
class PrimaryKey extends Shape
{
    /**
     * @param array{
     *     length: int,
     *     name?: string|null,
     *     offset: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
