<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $allowedValues
 * @property string|null $applyMethod
 * @property string|null $applyType
 * @property string|null $dataType
 * @property string|null $description
 * @property bool|null $isModifiable
 * @property string|null $parameterName
 * @property string|null $parameterValue
 */
class RelationalDatabaseParameter extends Shape
{
    /**
     * @param array{
     *     allowedValues?: string|null,
     *     applyMethod?: string|null,
     *     applyType?: string|null,
     *     dataType?: string|null,
     *     description?: string|null,
     *     isModifiable?: bool|null,
     *     parameterName?: string|null,
     *     parameterValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
