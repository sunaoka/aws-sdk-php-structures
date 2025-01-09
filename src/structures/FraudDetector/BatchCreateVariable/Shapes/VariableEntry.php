<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchCreateVariable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $dataType
 * @property string $dataSource
 * @property string $defaultValue
 * @property string $description
 * @property string $variableType
 */
class VariableEntry extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     dataType?: string,
     *     dataSource?: string,
     *     defaultValue?: string,
     *     description?: string,
     *     variableType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
