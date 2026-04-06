<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $ViewArn
 * @property string|null $NextToken
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     MaxResults?: int<1, 1000>|null,
     *     ViewArn?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
