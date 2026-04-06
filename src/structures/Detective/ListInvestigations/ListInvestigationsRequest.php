<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\FilterCriteria|null $FilterCriteria
 * @property Shapes\SortCriteria|null $SortCriteria
 */
class ListInvestigationsRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     FilterCriteria?: Shapes\FilterCriteria|null,
     *     SortCriteria?: Shapes\SortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
