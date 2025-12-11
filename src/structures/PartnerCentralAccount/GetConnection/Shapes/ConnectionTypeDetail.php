<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $InviterEmail
 * @property string $InviterName
 * @property 'ACTIVE'|'CANCELED' $Status
 * @property \Aws\Api\DateTimeResult|null $CanceledAt
 * @property string|null $CanceledBy
 * @property Participant $OtherParticipant
 */
class ConnectionTypeDetail extends Shape
{
    /**
     * @param array{
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     InviterEmail: string,
     *     InviterName: string,
     *     Status: 'ACTIVE'|'CANCELED',
     *     CanceledAt?: \Aws\Api\DateTimeResult|null,
     *     CanceledBy?: string|null,
     *     OtherParticipant: Participant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
