<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 */
class CreateChannelHandshakeDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
