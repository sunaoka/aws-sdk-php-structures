<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $signatureCount
 * @property int|null $instanceCount
 * @property int|null $predicateCount
 */
class StatisticsSummary extends Shape
{
    /**
     * @param array{
     *     signatureCount?: int|null,
     *     instanceCount?: int|null,
     *     predicateCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
