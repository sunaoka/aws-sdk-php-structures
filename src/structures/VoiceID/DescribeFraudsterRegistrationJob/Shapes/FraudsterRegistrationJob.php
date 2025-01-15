<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DataAccessRoleArn
 * @property string|null $DomainId
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property FailureDetails|null $FailureDetails
 * @property InputDataConfig|null $InputDataConfig
 * @property string|null $JobId
 * @property string|null $JobName
 * @property JobProgress|null $JobProgress
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null $JobStatus
 * @property OutputDataConfig|null $OutputDataConfig
 * @property RegistrationConfig|null $RegistrationConfig
 */
class FraudsterRegistrationJob extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DataAccessRoleArn?: string|null,
     *     DomainId?: string|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     FailureDetails?: FailureDetails|null,
     *     InputDataConfig?: InputDataConfig|null,
     *     JobId?: string|null,
     *     JobName?: string|null,
     *     JobProgress?: JobProgress|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null,
     *     OutputDataConfig?: OutputDataConfig|null,
     *     RegistrationConfig?: RegistrationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
