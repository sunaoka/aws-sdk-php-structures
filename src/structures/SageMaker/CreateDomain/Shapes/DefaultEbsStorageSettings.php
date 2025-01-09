<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 16384> $DefaultEbsVolumeSizeInGb
 * @property int<5, 16384> $MaximumEbsVolumeSizeInGb
 */
class DefaultEbsStorageSettings extends Shape
{
    /**
     * @param array{
     *     DefaultEbsVolumeSizeInGb: int<5, 16384>,
     *     MaximumEbsVolumeSizeInGb: int<5, 16384>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
