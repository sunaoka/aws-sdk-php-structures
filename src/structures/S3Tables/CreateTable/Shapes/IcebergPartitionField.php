<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sourceId
 * @property string $transform
 * @property string $name
 * @property int|null $fieldId
 */
class IcebergPartitionField extends Shape
{
    /**
     * @param array{
     *     sourceId: int,
     *     transform: string,
     *     name: string,
     *     fieldId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
