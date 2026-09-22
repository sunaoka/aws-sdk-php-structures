<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\SearchPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $searchQuery
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class SearchPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     searchQuery: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
