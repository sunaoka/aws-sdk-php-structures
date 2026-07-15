<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StarterProfileName
 */
class StarterProfileSource extends Shape
{
    /**
     * @param array{StarterProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
