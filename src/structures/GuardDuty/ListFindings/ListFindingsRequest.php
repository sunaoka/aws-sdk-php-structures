<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property Shapes\FindingCriteria|null $FindingCriteria
 * @property Shapes\SortCriteria|null $SortCriteria
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingCriteria?: Shapes\FindingCriteria|null,
     *     SortCriteria?: Shapes\SortCriteria|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
