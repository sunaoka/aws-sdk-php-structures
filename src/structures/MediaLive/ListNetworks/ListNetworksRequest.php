<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
