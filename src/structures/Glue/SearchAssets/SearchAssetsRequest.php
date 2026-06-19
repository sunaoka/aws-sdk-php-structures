<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SearchText
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\SearchSort|null $Sort
 * @property Shapes\SearchFilterClause|null $FilterClause
 */
class SearchAssetsRequest extends Request
{
    /**
     * @param array{
     *     SearchText?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\SearchSort|null,
     *     FilterClause?: Shapes\SearchFilterClause|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
