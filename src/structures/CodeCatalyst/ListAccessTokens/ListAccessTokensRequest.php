<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListAccessTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListAccessTokensRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<min, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
