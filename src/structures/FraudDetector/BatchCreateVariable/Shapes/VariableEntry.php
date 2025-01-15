<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchCreateVariable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $dataType
 * @property string|null $dataSource
 * @property string|null $defaultValue
 * @property string|null $description
 * @property string|null $variableType
 */
class VariableEntry extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dataType?: string|null,
     *     dataSource?: string|null,
     *     defaultValue?: string|null,
     *     description?: string|null,
     *     variableType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
