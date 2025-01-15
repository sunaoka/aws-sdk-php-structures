<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $fileType
 * @property int|null $storageClass
 * @property int|null $total
 */
class ObjectLevelStatistics extends Shape
{
    /**
     * @param array{
     *     fileType?: int|null,
     *     storageClass?: int|null,
     *     total?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
