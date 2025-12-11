<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ascending'|'Descending' $sortOrder
 * @property 'UpdatedAt' $sortBy
 */
class StartServicePeriodTypeSort extends Shape
{
    /**
     * @param array{
     *     sortOrder: 'Ascending'|'Descending',
     *     sortBy: 'UpdatedAt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
