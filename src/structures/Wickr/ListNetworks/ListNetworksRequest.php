<?php

namespace Sunaoka\Aws\Structures\Wickr\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $sortFields
 * @property 'ASC'|'DESC'|null $sortDirection
 * @property string|null $nextToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     sortFields?: string|null,
     *     sortDirection?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
