<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteMultiRegionAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class DeleteMultiRegionAccessPointInput extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
