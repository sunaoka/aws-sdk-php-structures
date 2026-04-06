<?php

namespace Sunaoka\Aws\Structures\CloudTrail\SearchSampleQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchPhrase
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchSampleQueriesRequest extends Request
{
    /**
     * @param array{
     *     SearchPhrase: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
