<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 */
class RegionStatus extends Shape
{
    /**
     * @param array{Status?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
