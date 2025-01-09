<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property ProtectedQuerySQLParameters $sqlParameters
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT' $status
 * @property ProtectedQueryResultConfiguration $resultConfiguration
 * @property ProtectedQueryStatistics $statistics
 * @property ProtectedQueryResult $result
 * @property ProtectedQueryError $error
 * @property DifferentialPrivacyParameters $differentialPrivacy
 * @property ComputeConfiguration $computeConfiguration
 */
class ProtectedQuery extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     sqlParameters?: ProtectedQuerySQLParameters,
     *     status: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT',
     *     resultConfiguration?: ProtectedQueryResultConfiguration,
     *     statistics?: ProtectedQueryStatistics,
     *     result?: ProtectedQueryResult,
     *     error?: ProtectedQueryError,
     *     differentialPrivacy?: DifferentialPrivacyParameters,
     *     computeConfiguration?: ComputeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
