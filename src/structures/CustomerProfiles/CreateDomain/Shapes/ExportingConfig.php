<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportingConfig $S3Exporting
 */
class ExportingConfig extends Shape
{
    /**
     * @param array{S3Exporting?: S3ExportingConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
