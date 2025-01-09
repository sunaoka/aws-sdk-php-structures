<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultEbsStorageSettings $DefaultEbsStorageSettings
 */
class DefaultSpaceStorageSettings extends Shape
{
    /**
     * @param array{DefaultEbsStorageSettings?: DefaultEbsStorageSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
