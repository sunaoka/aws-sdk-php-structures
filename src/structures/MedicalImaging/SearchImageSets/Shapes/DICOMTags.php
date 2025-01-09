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
 * @property int<0, 1000000> $DICOMNumberOfStudyRelatedSeries
 * @property int<0, 10000> $DICOMNumberOfStudyRelatedInstances
 * @property string $DICOMAccessionNumber
 * @property string $DICOMSeriesInstanceUID
 * @property string $DICOMSeriesModality
 * @property string $DICOMSeriesBodyPart
 * @property int<-2147483648, 2147483647> $DICOMSeriesNumber
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
     *     DICOMNumberOfStudyRelatedSeries?: int<0, 1000000>,
     *     DICOMNumberOfStudyRelatedInstances?: int<0, 10000>,
     *     DICOMAccessionNumber?: string,
     *     DICOMSeriesInstanceUID?: string,
     *     DICOMSeriesModality?: string,
     *     DICOMSeriesBodyPart?: string,
     *     DICOMSeriesNumber?: int<-2147483648, 2147483647>,
     *     DICOMStudyDate?: string,
     *     DICOMStudyTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
