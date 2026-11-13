<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FetchCriterion>|null $Criteria
 * @property FetchTimeWindow|null $TimeWindow
 * @property int<1, 1000>|null $RowLimit
 * @property string|null $AccountId
 * @property string|null $Indicator
 * @property 'IP'|'DOMAIN'|'FILE'|null $IndicatorType
 * @property string|null $FindingType
 * @property string|null $FindingId
 */
class FetchQuery extends Shape
{
    /**
     * @param array{
     *     Criteria?: list<FetchCriterion>|null,
     *     TimeWindow?: FetchTimeWindow|null,
     *     RowLimit?: int<1, 1000>|null,
     *     AccountId?: string|null,
     *     Indicator?: string|null,
     *     IndicatorType?: 'IP'|'DOMAIN'|'FILE'|null,
     *     FindingType?: string|null,
     *     FindingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
