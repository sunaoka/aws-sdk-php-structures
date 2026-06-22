<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property Shapes\InvestigationSortCriteria|null $SortCriteria
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInvestigationsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     SortCriteria?: Shapes\InvestigationSortCriteria|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
