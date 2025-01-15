<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ObjectSource|null $s3
 */
class TemplateVersionSourceInput extends Shape
{
    /**
     * @param array{s3?: S3ObjectSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
