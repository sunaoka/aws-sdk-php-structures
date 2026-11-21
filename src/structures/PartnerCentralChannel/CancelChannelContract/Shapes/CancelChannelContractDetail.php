<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE'|null $status
 * @property string|null $cancellationReason
 */
class CancelChannelContractDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE'|null,
     *     cancellationReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
