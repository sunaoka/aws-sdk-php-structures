<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DICOMPatientId
 * @property string $DICOMAccessionNumber
 * @property string $DICOMStudyId
 * @property string $DICOMStudyInstanceUID
 * @property string $DICOMSeriesInstanceUID
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property DICOMStudyDateAndTime $DICOMStudyDateAndTime
 */
class SearchByAttributeValue extends Shape
{
    /**
     * @param array{
     *     DICOMPatientId?: string,
     *     DICOMAccessionNumber?: string,
     *     DICOMStudyId?: string,
     *     DICOMStudyInstanceUID?: string,
     *     DICOMSeriesInstanceUID?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     DICOMStudyDateAndTime?: DICOMStudyDateAndTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
