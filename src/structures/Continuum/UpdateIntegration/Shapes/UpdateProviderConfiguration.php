<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateS3Configuration|null $s3
 */
class UpdateProviderConfiguration extends Shape
{
    /**
     * @param array{s3?: UpdateS3Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
