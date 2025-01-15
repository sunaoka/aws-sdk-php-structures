<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntitiesDetectionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $JobArn
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $EntityRecognizerArn
 * @property InputDataConfig|null $InputDataConfig
 * @property OutputDataConfig|null $OutputDataConfig
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null $LanguageCode
 * @property string|null $DataAccessRoleArn
 * @property string|null $VolumeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 * @property string|null $FlywheelArn
 */
class EntitiesDetectionJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobArn?: string|null,
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     Message?: string|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     EntityRecognizerArn?: string|null,
     *     InputDataConfig?: InputDataConfig|null,
     *     OutputDataConfig?: OutputDataConfig|null,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null,
     *     DataAccessRoleArn?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
