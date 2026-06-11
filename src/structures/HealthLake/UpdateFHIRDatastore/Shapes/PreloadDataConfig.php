<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYNTHEA' $PreloadDataType
 */
class PreloadDataConfig extends Shape
{
    /**
     * @param array{PreloadDataType: 'SYNTHEA'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
