<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT' $status
 * @property list<ReceiverConfiguration> $receiverConfigurations
 * @property string|null $queryComputePayerAccountId
 * @property IntermediateTableOutputConfiguration|null $intermediateTableConfiguration
 */
class ProtectedQuerySummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     status: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT',
     *     receiverConfigurations: list<ReceiverConfiguration>,
     *     queryComputePayerAccountId?: string|null,
     *     intermediateTableConfiguration?: IntermediateTableOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
