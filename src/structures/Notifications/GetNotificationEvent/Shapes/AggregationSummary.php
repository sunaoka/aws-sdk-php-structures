<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $eventCount
 * @property list<AggregationKey> $aggregatedBy
 * @property SummarizationDimensionOverview $aggregatedAccounts
 * @property SummarizationDimensionOverview $aggregatedRegions
 * @property SummarizationDimensionOverview|null $aggregatedOrganizationalUnits
 * @property list<SummarizationDimensionOverview>|null $additionalSummarizationDimensions
 */
class AggregationSummary extends Shape
{
    /**
     * @param array{
     *     eventCount: int,
     *     aggregatedBy: list<AggregationKey>,
     *     aggregatedAccounts: SummarizationDimensionOverview,
     *     aggregatedRegions: SummarizationDimensionOverview,
     *     aggregatedOrganizationalUnits?: SummarizationDimensionOverview|null,
     *     additionalSummarizationDimensions?: list<SummarizationDimensionOverview>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
