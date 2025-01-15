<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property JobDetails|null $JobDetails
 * @property string|null $SourceLanguageCode
 * @property list<string>|null $TargetLanguageCodes
 * @property list<string>|null $TerminologyNames
 * @property list<string>|null $ParallelDataNames
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $SubmittedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property InputDataConfig|null $InputDataConfig
 * @property OutputDataConfig|null $OutputDataConfig
 * @property string|null $DataAccessRoleArn
 * @property TranslationSettings|null $Settings
 */
class TextTranslationJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     JobDetails?: JobDetails|null,
     *     SourceLanguageCode?: string|null,
     *     TargetLanguageCodes?: list<string>|null,
     *     TerminologyNames?: list<string>|null,
     *     ParallelDataNames?: list<string>|null,
     *     Message?: string|null,
     *     SubmittedTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     InputDataConfig?: InputDataConfig|null,
     *     OutputDataConfig?: OutputDataConfig|null,
     *     DataAccessRoleArn?: string|null,
     *     Settings?: TranslationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
