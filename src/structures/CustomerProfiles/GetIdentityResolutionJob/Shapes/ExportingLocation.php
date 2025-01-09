<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportingLocation $S3Exporting
 */
class ExportingLocation extends Shape
{
    /**
     * @param array{S3Exporting?: S3ExportingLocation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
