<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InlineDataSchema
 */
class DatasetSchema extends Shape
{
    /**
     * @param array{InlineDataSchema?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
