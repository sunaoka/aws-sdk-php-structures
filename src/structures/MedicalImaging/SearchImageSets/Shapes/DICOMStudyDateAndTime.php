<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DICOMStudyDate
 * @property string $DICOMStudyTime
 */
class DICOMStudyDateAndTime extends Shape
{
    /**
     * @param array{
     *     DICOMStudyDate: string,
     *     DICOMStudyTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
