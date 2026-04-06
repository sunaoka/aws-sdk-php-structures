<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SourceId
 * @property string $Transform
 * @property string $Name
 * @property int|null $FieldId
 */
class IcebergPartitionField extends Shape
{
    /**
     * @param array{
     *     SourceId: int,
     *     Transform: string,
     *     Name: string,
     *     FieldId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
