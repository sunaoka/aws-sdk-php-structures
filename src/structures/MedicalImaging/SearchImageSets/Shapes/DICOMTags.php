<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DICOMPatientId
 * @property string|null $DICOMPatientName
 * @property string|null $DICOMPatientBirthDate
 * @property string|null $DICOMPatientSex
 * @property string|null $DICOMStudyInstanceUID
 * @property string|null $DICOMStudyId
 * @property string|null $DICOMStudyDescription
 * @property int<0, 10000>|null $DICOMNumberOfStudyRelatedSeries
 * @property int<0, 10000>|null $DICOMNumberOfStudyRelatedInstances
 * @property string|null $DICOMAccessionNumber
 * @property string|null $DICOMStudyDate
 * @property string|null $DICOMStudyTime
 */
class DICOMTags extends Shape
{
    /**
     * @param array{
     *     DICOMPatientId?: string|null,
     *     DICOMPatientName?: string|null,
     *     DICOMPatientBirthDate?: string|null,
     *     DICOMPatientSex?: string|null,
     *     DICOMStudyInstanceUID?: string|null,
     *     DICOMStudyId?: string|null,
     *     DICOMStudyDescription?: string|null,
     *     DICOMNumberOfStudyRelatedSeries?: int<0, 10000>|null,
     *     DICOMNumberOfStudyRelatedInstances?: int<0, 10000>|null,
     *     DICOMAccessionNumber?: string|null,
     *     DICOMStudyDate?: string|null,
     *     DICOMStudyTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
