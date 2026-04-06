<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $QueryString
 * @property string|null $ViewArn
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     QueryString: string,
     *     ViewArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
