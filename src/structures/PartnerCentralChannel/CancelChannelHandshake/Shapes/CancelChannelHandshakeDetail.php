<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null $status
 */
class CancelChannelHandshakeDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
