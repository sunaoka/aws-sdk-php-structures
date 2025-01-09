<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $referenceArn
 */
class ReferenceItem extends Shape
{
    /**
     * @param array{referenceArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
