<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property JobDetails $JobDetails
 * @property string $SourceLanguageCode
 * @property list<string> $TargetLanguageCodes
 * @property list<string> $TerminologyNames
 * @property list<string> $ParallelDataNames
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $SubmittedTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property InputDataConfig $InputDataConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property TranslationSettings $Settings
 */
class TextTranslationJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     JobDetails?: JobDetails,
     *     SourceLanguageCode?: string,
     *     TargetLanguageCodes?: list<string>,
     *     TerminologyNames?: list<string>,
     *     ParallelDataNames?: list<string>,
     *     Message?: string,
     *     SubmittedTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     InputDataConfig?: InputDataConfig,
     *     OutputDataConfig?: OutputDataConfig,
     *     DataAccessRoleArn?: string,
     *     Settings?: TranslationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
