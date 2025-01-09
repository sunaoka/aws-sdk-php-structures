<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $QueryString
 * @property string $ViewArn
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
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
