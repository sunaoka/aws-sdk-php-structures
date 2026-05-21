<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property ProtectedJobParameters|null $jobParameters
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS' $status
 * @property ProtectedJobResultConfigurationOutput|null $resultConfiguration
 * @property ProtectedJobStatistics|null $statistics
 * @property ProtectedJobResult|null $result
 * @property ProtectedJobError|null $error
 * @property ProtectedJobComputeConfiguration|null $computeConfiguration
 * @property string|null $jobComputePayerAccountId
 */
class ProtectedJob extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     jobParameters?: ProtectedJobParameters|null,
     *     status: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS',
     *     resultConfiguration?: ProtectedJobResultConfigurationOutput|null,
     *     statistics?: ProtectedJobStatistics|null,
     *     result?: ProtectedJobResult|null,
     *     error?: ProtectedJobError|null,
     *     computeConfiguration?: ProtectedJobComputeConfiguration|null,
     *     jobComputePayerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
