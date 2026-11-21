<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 */
class CreateChannelContractDetail extends Shape
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
