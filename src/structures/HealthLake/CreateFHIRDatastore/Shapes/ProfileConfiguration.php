<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DefaultProfiles
 */
class ProfileConfiguration extends Shape
{
    /**
     * @param array{DefaultProfiles?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
