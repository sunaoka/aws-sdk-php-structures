<?php

namespace Sunaoka\Aws\Structures\kendra\ListQuerySuggestionsBlockLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQuerySuggestionsBlockListsRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
