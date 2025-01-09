<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DICOMUpdates $DICOMUpdates
 * @property string $revertToVersionId
 */
class MetadataUpdates extends Shape
{
    /**
     * @param array{
     *     DICOMUpdates?: DICOMUpdates,
     *     revertToVersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
