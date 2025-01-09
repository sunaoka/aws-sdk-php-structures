<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\CoverageFilterCriteria $FilterCriteria
 * @property Shapes\CoverageSortCriteria $SortCriteria
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     FilterCriteria?: Shapes\CoverageFilterCriteria,
     *     SortCriteria?: Shapes\CoverageSortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
