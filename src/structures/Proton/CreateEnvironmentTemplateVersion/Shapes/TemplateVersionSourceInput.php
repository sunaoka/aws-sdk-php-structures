<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ObjectSource $s3
 */
class TemplateVersionSourceInput extends Shape
{
    /**
     * @param array{s3?: S3ObjectSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
