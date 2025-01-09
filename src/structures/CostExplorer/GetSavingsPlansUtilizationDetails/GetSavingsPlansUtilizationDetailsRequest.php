<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property Shapes\Expression $Filter
 * @property list<'ATTRIBUTES'|'UTILIZATION'|'AMORTIZED_COMMITMENT'|'SAVINGS'> $DataType
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\SortDefinition $SortBy
 */
class GetSavingsPlansUtilizationDetailsRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Filter?: Shapes\Expression,
     *     DataType?: list<'ATTRIBUTES'|'UTILIZATION'|'AMORTIZED_COMMITMENT'|'SAVINGS'>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SortBy?: Shapes\SortDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
