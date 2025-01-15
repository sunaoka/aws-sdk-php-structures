<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentClassifierArn
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null $LanguageCode
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $TrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property DocumentClassifierInputDataConfig|null $InputDataConfig
 * @property DocumentClassifierOutputDataConfig|null $OutputDataConfig
 * @property ClassifierMetadata|null $ClassifierMetadata
 * @property string|null $DataAccessRoleArn
 * @property string|null $VolumeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 * @property 'MULTI_CLASS'|'MULTI_LABEL'|null $Mode
 * @property string|null $ModelKmsKeyId
 * @property string|null $VersionName
 * @property string|null $SourceModelArn
 * @property string|null $FlywheelArn
 */
class DocumentClassifierProperties extends Shape
{
    /**
     * @param array{
     *     DocumentClassifierArn?: string|null,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null,
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null,
     *     Message?: string|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult|null,
     *     InputDataConfig?: DocumentClassifierInputDataConfig|null,
     *     OutputDataConfig?: DocumentClassifierOutputDataConfig|null,
     *     ClassifierMetadata?: ClassifierMetadata|null,
     *     DataAccessRoleArn?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     Mode?: 'MULTI_CLASS'|'MULTI_LABEL'|null,
     *     ModelKmsKeyId?: string|null,
     *     VersionName?: string|null,
     *     SourceModelArn?: string|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
