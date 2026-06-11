<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'ENABLING'|'DISABLING'|null $Status
 */
class NlpConfiguration extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'|'ENABLING'|'DISABLING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
