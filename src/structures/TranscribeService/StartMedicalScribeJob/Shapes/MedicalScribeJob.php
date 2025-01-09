<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MedicalScribeJobName
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $MedicalScribeJobStatus
 * @property 'en-US' $LanguageCode
 * @property Media $Media
 * @property MedicalScribeOutput $MedicalScribeOutput
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $FailureReason
 * @property MedicalScribeSettings $Settings
 * @property string $DataAccessRoleArn
 * @property list<MedicalScribeChannelDefinition> $ChannelDefinitions
 * @property list<Tag> $Tags
 */
class MedicalScribeJob extends Shape
{
    /**
     * @param array{
     *     MedicalScribeJobName?: string,
     *     MedicalScribeJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     LanguageCode?: 'en-US',
     *     Media?: Media,
     *     MedicalScribeOutput?: MedicalScribeOutput,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     Settings?: MedicalScribeSettings,
     *     DataAccessRoleArn?: string,
     *     ChannelDefinitions?: list<MedicalScribeChannelDefinition>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
