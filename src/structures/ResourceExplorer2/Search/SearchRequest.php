<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $QueryString
 * @property string $ViewArn
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     QueryString: string,
     *     ViewArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
