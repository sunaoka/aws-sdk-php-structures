<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $referenceArn
 */
class ReferenceItem extends Shape
{
    /**
     * @param array{referenceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
