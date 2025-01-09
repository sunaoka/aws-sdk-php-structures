<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityRecognizerArn
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING' $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $TrainingStartTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property EntityRecognizerInputDataConfig $InputDataConfig
 * @property EntityRecognizerMetadata $RecognizerMetadata
 * @property string $DataAccessRoleArn
 * @property string $VolumeKmsKeyId
 * @property VpcConfig $VpcConfig
 * @property string $ModelKmsKeyId
 * @property string $VersionName
 * @property string $SourceModelArn
 * @property string $FlywheelArn
 * @property EntityRecognizerOutputDataConfig $OutputDataConfig
 */
class EntityRecognizerProperties extends Shape
{
    /**
     * @param array{
     *     EntityRecognizerArn?: string,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING',
     *     Message?: string,
     *     SubmitTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult,
     *     InputDataConfig?: EntityRecognizerInputDataConfig,
     *     RecognizerMetadata?: EntityRecognizerMetadata,
     *     DataAccessRoleArn?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig,
     *     ModelKmsKeyId?: string,
     *     VersionName?: string,
     *     SourceModelArn?: string,
     *     FlywheelArn?: string,
     *     OutputDataConfig?: EntityRecognizerOutputDataConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
