<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FormOutput> $formsOutput
 * @property list<TimeSeriesDataPointSummaryFormOutput> $latestTimeSeriesDataPointFormsOutput
 * @property list<FormOutput> $readOnlyFormsOutput
 */
class AssetItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     formsOutput?: list<FormOutput>,
     *     latestTimeSeriesDataPointFormsOutput?: list<TimeSeriesDataPointSummaryFormOutput>,
     *     readOnlyFormsOutput?: list<FormOutput>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
