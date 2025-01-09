<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\PutRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks' $Unit
 * @property int<1, max> $Value
 */
class TtlDuration extends Shape
{
    /**
     * @param array{
     *     Unit: 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
