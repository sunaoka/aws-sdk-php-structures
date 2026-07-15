<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null $Status
 */
class NlpConfiguration extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
