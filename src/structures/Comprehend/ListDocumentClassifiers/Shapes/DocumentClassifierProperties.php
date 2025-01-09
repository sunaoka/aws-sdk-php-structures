<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentClassifierArn
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING' $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $TrainingStartTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property DocumentClassifierInputDataConfig $InputDataConfig
 * @property DocumentClassifierOutputDataConfig $OutputDataConfig
 * @property ClassifierMetadata $ClassifierMetadata
 * @property string $DataAccessRoleArn
 * @property string $VolumeKmsKeyId
 * @property VpcConfig $VpcConfig
 * @property 'MULTI_CLASS'|'MULTI_LABEL' $Mode
 * @property string $ModelKmsKeyId
 * @property string $VersionName
 * @property string $SourceModelArn
 * @property string $FlywheelArn
 */
class DocumentClassifierProperties extends Shape
{
    /**
     * @param array{
     *     DocumentClassifierArn?: string,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING',
     *     Message?: string,
     *     SubmitTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult,
     *     InputDataConfig?: DocumentClassifierInputDataConfig,
     *     OutputDataConfig?: DocumentClassifierOutputDataConfig,
     *     ClassifierMetadata?: ClassifierMetadata,
     *     DataAccessRoleArn?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig,
     *     Mode?: 'MULTI_CLASS'|'MULTI_LABEL',
     *     ModelKmsKeyId?: string,
     *     VersionName?: string,
     *     SourceModelArn?: string,
     *     FlywheelArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
