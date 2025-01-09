<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property Shapes\SortCriteria $SortCriteria
 */
class ListInvestigationsRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     FilterCriteria?: Shapes\FilterCriteria,
     *     SortCriteria?: Shapes\SortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
