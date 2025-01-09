<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignDateRangeKpi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResultRow> $Rows
 */
class BaseKpiResult extends Shape
{
    /**
     * @param array{Rows: list<ResultRow>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
