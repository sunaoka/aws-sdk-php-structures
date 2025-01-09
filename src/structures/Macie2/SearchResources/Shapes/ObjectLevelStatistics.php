<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $fileType
 * @property int $storageClass
 * @property int $total
 */
class ObjectLevelStatistics extends Shape
{
    /**
     * @param array{
     *     fileType?: int,
     *     storageClass?: int,
     *     total?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
