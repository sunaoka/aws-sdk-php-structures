<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $autoCompute
 * @property bool $active
 * @property string $statisticsId
 * @property \Aws\Api\DateTimeResult $date
 * @property string $note
 * @property StatisticsSummary $signatureInfo
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     autoCompute?: bool,
     *     active?: bool,
     *     statisticsId?: string,
     *     date?: \Aws\Api\DateTimeResult,
     *     note?: string,
     *     signatureInfo?: StatisticsSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
