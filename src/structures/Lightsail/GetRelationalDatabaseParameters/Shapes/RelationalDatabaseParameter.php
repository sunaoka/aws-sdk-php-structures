<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $allowedValues
 * @property string $applyMethod
 * @property string $applyType
 * @property string $dataType
 * @property string $description
 * @property bool $isModifiable
 * @property string $parameterName
 * @property string $parameterValue
 */
class RelationalDatabaseParameter extends Shape
{
    /**
     * @param array{
     *     allowedValues?: string,
     *     applyMethod?: string,
     *     applyType?: string,
     *     dataType?: string,
     *     description?: string,
     *     isModifiable?: bool,
     *     parameterName?: string,
     *     parameterValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
