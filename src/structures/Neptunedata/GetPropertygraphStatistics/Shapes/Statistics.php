<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $autoCompute
 * @property bool|null $active
 * @property string|null $statisticsId
 * @property \Aws\Api\DateTimeResult|null $date
 * @property string|null $note
 * @property StatisticsSummary|null $signatureInfo
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     autoCompute?: bool|null,
     *     active?: bool|null,
     *     statisticsId?: string|null,
     *     date?: \Aws\Api\DateTimeResult|null,
     *     note?: string|null,
     *     signatureInfo?: StatisticsSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
