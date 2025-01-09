<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
