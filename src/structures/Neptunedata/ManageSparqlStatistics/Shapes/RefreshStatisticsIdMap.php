<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManageSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $statisticsId
 */
class RefreshStatisticsIdMap extends Shape
{
    /**
     * @param array{statisticsId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
