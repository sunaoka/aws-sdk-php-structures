<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ResetCacheParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $ParameterValue
 */
class ParameterNameValue extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
