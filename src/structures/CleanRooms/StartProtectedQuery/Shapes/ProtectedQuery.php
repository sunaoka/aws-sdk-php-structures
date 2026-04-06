<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property ProtectedQuerySQLParameters|null $sqlParameters
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT' $status
 * @property ProtectedQueryResultConfiguration|null $resultConfiguration
 * @property ProtectedQueryStatistics|null $statistics
 * @property ProtectedQueryResult|null $result
 * @property ProtectedQueryError|null $error
 * @property DifferentialPrivacyParameters|null $differentialPrivacy
 * @property ComputeConfiguration|null $computeConfiguration
 */
class ProtectedQuery extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     sqlParameters?: ProtectedQuerySQLParameters|null,
     *     status: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT',
     *     resultConfiguration?: ProtectedQueryResultConfiguration|null,
     *     statistics?: ProtectedQueryStatistics|null,
     *     result?: ProtectedQueryResult|null,
     *     error?: ProtectedQueryError|null,
     *     differentialPrivacy?: DifferentialPrivacyParameters|null,
     *     computeConfiguration?: ComputeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
