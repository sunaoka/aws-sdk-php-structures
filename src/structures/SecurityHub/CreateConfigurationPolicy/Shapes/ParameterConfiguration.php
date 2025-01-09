<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ValueType
 * @property ParameterValue $Value
 */
class ParameterConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueType: 'DEFAULT'|'CUSTOM',
     *     Value?: ParameterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
