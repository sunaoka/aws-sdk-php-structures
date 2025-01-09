<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataAccessRoleArn
 * @property string $DomainId
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property FailureDetails $FailureDetails
 * @property InputDataConfig $InputDataConfig
 * @property string $JobId
 * @property string $JobName
 * @property JobProgress $JobProgress
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 * @property OutputDataConfig $OutputDataConfig
 * @property RegistrationConfig $RegistrationConfig
 */
class FraudsterRegistrationJob extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DataAccessRoleArn?: string,
     *     DomainId?: string,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     FailureDetails?: FailureDetails,
     *     InputDataConfig?: InputDataConfig,
     *     JobId?: string,
     *     JobName?: string,
     *     JobProgress?: JobProgress,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     OutputDataConfig?: OutputDataConfig,
     *     RegistrationConfig?: RegistrationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
