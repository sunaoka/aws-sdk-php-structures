<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $trackingAssets
 */
class SageMakerRunConfigurationInput extends Shape
{
    /**
     * @param array{trackingAssets: array<string, list<string>>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
