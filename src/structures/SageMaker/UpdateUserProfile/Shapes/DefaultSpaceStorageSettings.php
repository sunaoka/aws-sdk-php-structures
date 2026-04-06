<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultEbsStorageSettings|null $DefaultEbsStorageSettings
 */
class DefaultSpaceStorageSettings extends Shape
{
    /**
     * @param array{DefaultEbsStorageSettings?: DefaultEbsStorageSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
