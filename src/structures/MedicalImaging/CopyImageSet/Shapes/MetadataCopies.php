<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $copiableAttributes
 */
class MetadataCopies extends Shape
{
    /**
     * @param array{copiableAttributes: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
