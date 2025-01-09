<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property string $statisticsId
 */
class DeleteStatisticsValueMap extends Shape
{
    /**
     * @param array{
     *     active?: bool,
     *     statisticsId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
