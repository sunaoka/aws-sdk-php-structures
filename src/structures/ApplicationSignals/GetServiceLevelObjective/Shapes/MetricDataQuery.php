<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property MetricStat|null $MetricStat
 * @property string|null $Expression
 * @property string|null $Label
 * @property bool|null $ReturnData
 * @property int<1, max>|null $Period
 * @property string|null $AccountId
 */
class MetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MetricStat?: MetricStat|null,
     *     Expression?: string|null,
     *     Label?: string|null,
     *     ReturnData?: bool|null,
     *     Period?: int<1, max>|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
