<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListICD10CMInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property InputDataConfig|null $InputDataConfig
 * @property OutputDataConfig|null $OutputDataConfig
 * @property 'en'|null $LanguageCode
 * @property string|null $DataAccessRoleArn
 * @property string|null $ManifestFilePath
 * @property string|null $KMSKey
 * @property string|null $ModelVersion
 */
class ComprehendMedicalAsyncJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     Message?: string|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     InputDataConfig?: InputDataConfig|null,
     *     OutputDataConfig?: OutputDataConfig|null,
     *     LanguageCode?: 'en'|null,
     *     DataAccessRoleArn?: string|null,
     *     ManifestFilePath?: string|null,
     *     KMSKey?: string|null,
     *     ModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
