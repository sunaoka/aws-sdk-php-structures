<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Expression
 * @property MetricStat|null $MetricStat
 * @property string|null $Label
 * @property bool|null $ReturnData
 */
class MetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string|null,
     *     MetricStat?: MetricStat|null,
     *     Label?: string|null,
     *     ReturnData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
