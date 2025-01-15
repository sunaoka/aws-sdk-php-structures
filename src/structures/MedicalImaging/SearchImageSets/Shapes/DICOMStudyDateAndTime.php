<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DICOMStudyDate
 * @property string|null $DICOMStudyTime
 */
class DICOMStudyDateAndTime extends Shape
{
    /**
     * @param array{
     *     DICOMStudyDate: string,
     *     DICOMStudyTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
