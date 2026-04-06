<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $FunctionSpec
 */
class IntegrationPartition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     FunctionSpec?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
