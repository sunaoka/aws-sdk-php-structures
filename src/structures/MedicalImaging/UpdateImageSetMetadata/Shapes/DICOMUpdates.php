<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $removableAttributes
 * @property string $updatableAttributes
 */
class DICOMUpdates extends Shape
{
    /**
     * @param array{
     *     removableAttributes?: string,
     *     updatableAttributes?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
