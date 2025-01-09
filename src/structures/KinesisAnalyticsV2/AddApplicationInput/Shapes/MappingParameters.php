<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JSONMappingParameters $JSONMappingParameters
 * @property CSVMappingParameters $CSVMappingParameters
 */
class MappingParameters extends Shape
{
    /**
     * @param array{
     *     JSONMappingParameters?: JSONMappingParameters,
     *     CSVMappingParameters?: CSVMappingParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
