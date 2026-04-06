<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceImage
 * @property string|null $destinationImage
 */
class ImageMapping extends Shape
{
    /**
     * @param array{
     *     sourceImage?: string|null,
     *     destinationImage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
