<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportingConfig|null $S3Exporting
 */
class ExportingConfig extends Shape
{
    /**
     * @param array{S3Exporting?: S3ExportingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
