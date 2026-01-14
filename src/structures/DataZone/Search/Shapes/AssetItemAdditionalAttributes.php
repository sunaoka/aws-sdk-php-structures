<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FormOutput>|null $formsOutput
 * @property list<FormOutput>|null $readOnlyFormsOutput
 * @property list<TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointFormsOutput
 * @property list<MatchRationaleItem>|null $matchRationale
 */
class AssetItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     formsOutput?: list<FormOutput>|null,
     *     readOnlyFormsOutput?: list<FormOutput>|null,
     *     latestTimeSeriesDataPointFormsOutput?: list<TimeSeriesDataPointSummaryFormOutput>|null,
     *     matchRationale?: list<MatchRationaleItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
