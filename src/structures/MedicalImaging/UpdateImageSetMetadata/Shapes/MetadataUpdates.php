<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DICOMUpdates|null $DICOMUpdates
 * @property string|null $revertToVersionId
 */
class MetadataUpdates extends Shape
{
    /**
     * @param array{
     *     DICOMUpdates?: DICOMUpdates|null,
     *     revertToVersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
