<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $FunctionSpec
 * @property string|null $ConversionSpec
 */
class IntegrationPartition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     FunctionSpec?: string|null,
     *     ConversionSpec?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
