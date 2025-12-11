<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeResponsibilityTransfer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Id
 * @property 'BILLING'|null $Type
 * @property 'REQUESTED'|'DECLINED'|'CANCELED'|'EXPIRED'|'ACCEPTED'|'WITHDRAWN'|null $Status
 * @property TransferParticipant|null $Source
 * @property TransferParticipant|null $Target
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property string|null $ActiveHandshakeId
 */
class ResponsibilityTransfer extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Id?: string|null,
     *     Type?: 'BILLING'|null,
     *     Status?: 'REQUESTED'|'DECLINED'|'CANCELED'|'EXPIRED'|'ACCEPTED'|'WITHDRAWN'|null,
     *     Source?: TransferParticipant|null,
     *     Target?: TransferParticipant|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ActiveHandshakeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
