<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSKeyArn
 * @property int<1, 90>|null $RetentionPeriodInDays
 * @property int<1, 31622400>|null $ExecutionTimeout
 */
class DurableConfig extends Shape
{
    /**
     * @param array{
     *     KMSKeyArn?: string|null,
     *     RetentionPeriodInDays?: int<1, 90>|null,
     *     ExecutionTimeout?: int<1, 31622400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
