<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 */
class OriginDetails extends Shape
{
    /**
     * @param array{ProductId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
