<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManagePropertygraphStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statisticsId
 */
class RefreshStatisticsIdMap extends Shape
{
    /**
     * @param array{statisticsId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
