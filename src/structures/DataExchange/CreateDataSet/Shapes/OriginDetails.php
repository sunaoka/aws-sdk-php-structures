<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductId
 * @property string $DataGrantId
 */
class OriginDetails extends Shape
{
    /**
     * @param array{
     *     ProductId?: string,
     *     DataGrantId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
