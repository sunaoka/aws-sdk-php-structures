<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property Shapes\CoverageFilterCriteria|null $FilterCriteria
 * @property Shapes\CoverageSortCriteria|null $SortCriteria
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     FilterCriteria?: Shapes\CoverageFilterCriteria|null,
     *     SortCriteria?: Shapes\CoverageSortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
