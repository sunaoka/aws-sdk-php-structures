<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListRxNormInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property InputDataConfig $InputDataConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property 'en' $LanguageCode
 * @property string $DataAccessRoleArn
 * @property string $ManifestFilePath
 * @property string $KMSKey
 * @property string $ModelVersion
 */
class ComprehendMedicalAsyncJobProperties extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     Message?: string,
     *     SubmitTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ExpirationTime?: \Aws\Api\DateTimeResult,
     *     InputDataConfig?: InputDataConfig,
     *     OutputDataConfig?: OutputDataConfig,
     *     LanguageCode?: 'en',
     *     DataAccessRoleArn?: string,
     *     ManifestFilePath?: string,
     *     KMSKey?: string,
     *     ModelVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
