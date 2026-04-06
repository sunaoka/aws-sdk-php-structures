<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductId
 * @property string|null $DataGrantId
 */
class OriginDetails extends Shape
{
    /**
     * @param array{
     *     ProductId?: string|null,
     *     DataGrantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
