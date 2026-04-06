<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListReceivedDataGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SenderPrincipal
 * @property string $ReceiverPrincipal
 * @property 'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED' $AcceptanceState
 * @property \Aws\Api\DateTimeResult|null $AcceptedAt
 * @property \Aws\Api\DateTimeResult|null $EndsAt
 * @property string $DataSetId
 * @property string $Id
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ReceivedDataGrantSummariesEntry extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SenderPrincipal: string,
     *     ReceiverPrincipal: string,
     *     AcceptanceState: 'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED',
     *     AcceptedAt?: \Aws\Api\DateTimeResult|null,
     *     EndsAt?: \Aws\Api\DateTimeResult|null,
     *     DataSetId: string,
     *     Id: string,
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
