<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DICOMPatientId
 * @property string|null $DICOMAccessionNumber
 * @property string|null $DICOMStudyId
 * @property string|null $DICOMStudyInstanceUID
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property DICOMStudyDateAndTime|null $DICOMStudyDateAndTime
 */
class SearchByAttributeValue extends Shape
{
    /**
     * @param array{
     *     DICOMPatientId?: string|null,
     *     DICOMAccessionNumber?: string|null,
     *     DICOMStudyId?: string|null,
     *     DICOMStudyInstanceUID?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     DICOMStudyDateAndTime?: DICOMStudyDateAndTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
