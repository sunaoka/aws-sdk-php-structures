<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DICOMPatientId
 * @property string $DICOMPatientName
 * @property string $DICOMPatientBirthDate
 * @property string $DICOMPatientSex
 * @property string $DICOMStudyInstanceUID
 * @property string $DICOMStudyId
 * @property string $DICOMStudyDescription
 * @property int $DICOMNumberOfStudyRelatedSeries
 * @property int $DICOMNumberOfStudyRelatedInstances
 * @property string $DICOMAccessionNumber
 * @property string $DICOMSeriesInstanceUID
 * @property string $DICOMSeriesModality
 * @property string $DICOMSeriesBodyPart
 * @property int $DICOMSeriesNumber
 * @property string $DICOMStudyDate
 * @property string $DICOMStudyTime
 */
class DICOMTags extends Shape
{
    /**
     * @param array{
     *     DICOMPatientId?: string,
     *     DICOMPatientName?: string,
     *     DICOMPatientBirthDate?: string,
     *     DICOMPatientSex?: string,
     *     DICOMStudyInstanceUID?: string,
     *     DICOMStudyId?: string,
     *     DICOMStudyDescription?: string,
     *     DICOMNumberOfStudyRelatedSeries?: int,
     *     DICOMNumberOfStudyRelatedInstances?: int,
     *     DICOMAccessionNumber?: string,
     *     DICOMSeriesInstanceUID?: string,
     *     DICOMSeriesModality?: string,
     *     DICOMSeriesBodyPart?: string,
     *     DICOMSeriesNumber?: int,
     *     DICOMStudyDate?: string,
     *     DICOMStudyTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
