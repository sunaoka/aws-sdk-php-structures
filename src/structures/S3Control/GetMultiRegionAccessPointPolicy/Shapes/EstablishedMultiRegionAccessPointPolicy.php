<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Policy
 */
class EstablishedMultiRegionAccessPointPolicy extends Shape
{
    /**
     * @param array{Policy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
