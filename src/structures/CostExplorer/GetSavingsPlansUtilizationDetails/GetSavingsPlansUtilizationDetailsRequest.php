<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property Shapes\Expression|null $Filter
 * @property list<'ATTRIBUTES'|'UTILIZATION'|'AMORTIZED_COMMITMENT'|'SAVINGS'>|null $DataType
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property Shapes\SortDefinition|null $SortBy
 */
class GetSavingsPlansUtilizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Filter?: Shapes\Expression|null,
     *     DataType?: list<'ATTRIBUTES'|'UTILIZATION'|'AMORTIZED_COMMITMENT'|'SAVINGS'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     SortBy?: Shapes\SortDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
