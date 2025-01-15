<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityRecognizerArn
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null $LanguageCode
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $TrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property EntityRecognizerInputDataConfig|null $InputDataConfig
 * @property EntityRecognizerMetadata|null $RecognizerMetadata
 * @property string|null $DataAccessRoleArn
 * @property string|null $VolumeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 * @property string|null $ModelKmsKeyId
 * @property string|null $VersionName
 * @property string|null $SourceModelArn
 * @property string|null $FlywheelArn
 * @property EntityRecognizerOutputDataConfig|null $OutputDataConfig
 */
class EntityRecognizerProperties extends Shape
{
    /**
     * @param array{
     *     EntityRecognizerArn?: string|null,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null,
     *     Status?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null,
     *     Message?: string|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult|null,
     *     InputDataConfig?: EntityRecognizerInputDataConfig|null,
     *     RecognizerMetadata?: EntityRecognizerMetadata|null,
     *     DataAccessRoleArn?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     ModelKmsKeyId?: string|null,
     *     VersionName?: string|null,
     *     SourceModelArn?: string|null,
     *     FlywheelArn?: string|null,
     *     OutputDataConfig?: EntityRecognizerOutputDataConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
