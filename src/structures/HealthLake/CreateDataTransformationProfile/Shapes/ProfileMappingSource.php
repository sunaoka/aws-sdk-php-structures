<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $ProfileMapping
 */
class ProfileMappingSource extends Shape
{
    /**
     * @param array{ProfileMapping: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
