<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS' $status
 * @property list<ProtectedJobReceiverConfiguration> $receiverConfigurations
 */
class ProtectedJobSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     status: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS',
     *     receiverConfigurations: list<ProtectedJobReceiverConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
