<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JSONMappingParameters|null $JSONMappingParameters
 * @property CSVMappingParameters|null $CSVMappingParameters
 */
class MappingParameters extends Shape
{
    /**
     * @param array{
     *     JSONMappingParameters?: JSONMappingParameters|null,
     *     CSVMappingParameters?: CSVMappingParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
