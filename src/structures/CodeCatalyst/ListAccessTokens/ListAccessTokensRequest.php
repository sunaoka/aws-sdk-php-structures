<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListAccessTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 10> $maxResults
 * @property string $nextToken
 */
class ListAccessTokensRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<min, 10>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
