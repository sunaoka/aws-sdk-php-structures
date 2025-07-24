<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FormOutput>|null $formsOutput
 * @property list<TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointFormsOutput
 * @property list<MatchRationaleItem>|null $matchRationale
 * @property list<FormOutput>|null $readOnlyFormsOutput
 */
class AssetItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     formsOutput?: list<FormOutput>|null,
     *     latestTimeSeriesDataPointFormsOutput?: list<TimeSeriesDataPointSummaryFormOutput>|null,
     *     matchRationale?: list<MatchRationaleItem>|null,
     *     readOnlyFormsOutput?: list<FormOutput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
