<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InlineDataSchema
 */
class DatasetSchema extends Shape
{
    /**
     * @param array{InlineDataSchema?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
