<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $signatureCount
 * @property int $instanceCount
 * @property int $predicateCount
 */
class StatisticsSummary extends Shape
{
    /**
     * @param array{
     *     signatureCount?: int,
     *     instanceCount?: int,
     *     predicateCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
