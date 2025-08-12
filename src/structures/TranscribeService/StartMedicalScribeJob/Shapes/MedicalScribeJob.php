<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MedicalScribeJobName
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $MedicalScribeJobStatus
 * @property 'en-US'|null $LanguageCode
 * @property Media|null $Media
 * @property MedicalScribeOutput|null $MedicalScribeOutput
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $FailureReason
 * @property MedicalScribeSettings|null $Settings
 * @property string|null $DataAccessRoleArn
 * @property list<MedicalScribeChannelDefinition>|null $ChannelDefinitions
 * @property bool|null $MedicalScribeContextProvided
 * @property list<Tag>|null $Tags
 */
class MedicalScribeJob extends Shape
{
    /**
     * @param array{
     *     MedicalScribeJobName?: string|null,
     *     MedicalScribeJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     LanguageCode?: 'en-US'|null,
     *     Media?: Media|null,
     *     MedicalScribeOutput?: MedicalScribeOutput|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     Settings?: MedicalScribeSettings|null,
     *     DataAccessRoleArn?: string|null,
     *     ChannelDefinitions?: list<MedicalScribeChannelDefinition>|null,
     *     MedicalScribeContextProvided?: bool|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
