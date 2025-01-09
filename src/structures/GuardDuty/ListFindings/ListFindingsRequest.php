<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property Shapes\SortCriteria $SortCriteria
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingCriteria?: Shapes\FindingCriteria,
     *     SortCriteria?: Shapes\SortCriteria,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
