<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
