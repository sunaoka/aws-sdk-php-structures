<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $active
 * @property string|null $statisticsId
 */
class DeleteStatisticsValueMap extends Shape
{
    /**
     * @param array{
     *     active?: bool|null,
     *     statisticsId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
