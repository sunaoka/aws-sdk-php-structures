<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DefaultEbsVolumeSizeInGb
 * @property int $MaximumEbsVolumeSizeInGb
 */
class DefaultEbsStorageSettings extends Shape
{
    /**
     * @param array{
     *     DefaultEbsVolumeSizeInGb: int,
     *     MaximumEbsVolumeSizeInGb: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
