<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
